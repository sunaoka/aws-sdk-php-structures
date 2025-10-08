<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveSearches;

trait ListArchiveSearchesTrait
{
    /**
     * @param ListArchiveSearchesRequest $args
     * @return ListArchiveSearchesResponse
     */
    public function listArchiveSearches(ListArchiveSearchesRequest $args)
    {
        $result = parent::listArchiveSearches($args->toArray());
        return new ListArchiveSearchesResponse($result->toArray());
    }
}
