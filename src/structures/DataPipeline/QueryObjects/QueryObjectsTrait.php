<?php

namespace Sunaoka\Aws\Structures\DataPipeline\QueryObjects;

trait QueryObjectsTrait
{
    /**
     * @param QueryObjectsRequest $args
     * @return QueryObjectsResponse
     */
    public function queryObjects(QueryObjectsRequest $args)
    {
        $result = parent::queryObjects($args->toArray());
        return new QueryObjectsResponse($result->toArray());
    }
}
