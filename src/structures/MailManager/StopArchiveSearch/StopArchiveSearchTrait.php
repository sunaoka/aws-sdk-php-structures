<?php

namespace Sunaoka\Aws\Structures\MailManager\StopArchiveSearch;

trait StopArchiveSearchTrait
{
    /**
     * @param StopArchiveSearchRequest $args
     * @return StopArchiveSearchResponse
     */
    public function stopArchiveSearch(StopArchiveSearchRequest $args)
    {
        $result = parent::stopArchiveSearch($args->toArray());
        return new StopArchiveSearchResponse($result->toArray());
    }
}
