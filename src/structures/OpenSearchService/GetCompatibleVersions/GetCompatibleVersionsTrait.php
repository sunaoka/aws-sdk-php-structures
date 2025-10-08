<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetCompatibleVersions;

trait GetCompatibleVersionsTrait
{
    /**
     * @param GetCompatibleVersionsRequest $args
     * @return GetCompatibleVersionsResponse
     */
    public function getCompatibleVersions(GetCompatibleVersionsRequest $args)
    {
        $result = parent::getCompatibleVersions($args->toArray());
        return new GetCompatibleVersionsResponse($result->toArray());
    }
}
