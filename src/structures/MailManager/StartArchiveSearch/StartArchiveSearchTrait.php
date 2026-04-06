<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveSearch;

trait StartArchiveSearchTrait
{
    /**
     * @param StartArchiveSearchRequest $args
     * @return StartArchiveSearchResponse
     */
    public function startArchiveSearch(StartArchiveSearchRequest $args)
    {
        $result = parent::startArchiveSearch($args->toArray());
        return new StartArchiveSearchResponse($result->toArray());
    }
}
