<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersions;

trait GetTableVersionsTrait
{
    /**
     * @param GetTableVersionsRequest $args
     * @return GetTableVersionsResponse
     */
    public function getTableVersions(GetTableVersionsRequest $args)
    {
        $result = parent::getTableVersions($args->toArray());
        return new GetTableVersionsResponse($result->toArray());
    }
}
