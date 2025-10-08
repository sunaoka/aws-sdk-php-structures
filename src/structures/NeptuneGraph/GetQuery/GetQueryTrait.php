<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetQuery;

trait GetQueryTrait
{
    /**
     * @param GetQueryRequest $args
     * @return GetQueryResponse
     */
    public function getQuery(GetQueryRequest $args)
    {
        $result = parent::getQuery($args->toArray());
        return new GetQueryResponse($result->toArray());
    }
}
