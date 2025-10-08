<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetStoredQuery;

trait GetStoredQueryTrait
{
    /**
     * @param GetStoredQueryRequest $args
     * @return GetStoredQueryResponse
     */
    public function getStoredQuery(GetStoredQueryRequest $args)
    {
        $result = parent::getStoredQuery($args->toArray());
        return new GetStoredQueryResponse($result->toArray());
    }
}
