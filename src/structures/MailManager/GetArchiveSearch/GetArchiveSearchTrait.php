<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch;

trait GetArchiveSearchTrait
{
    /**
     * @param GetArchiveSearchRequest $args
     * @return GetArchiveSearchResponse
     */
    public function getArchiveSearch(GetArchiveSearchRequest $args)
    {
        $result = parent::getArchiveSearch($args->toArray());
        return new GetArchiveSearchResponse($result->toArray());
    }
}
