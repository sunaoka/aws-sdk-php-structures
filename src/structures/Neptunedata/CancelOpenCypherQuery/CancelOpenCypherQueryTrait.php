<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelOpenCypherQuery;

trait CancelOpenCypherQueryTrait
{
    /**
     * @param CancelOpenCypherQueryRequest $args
     * @return CancelOpenCypherQueryResponse
     */
    public function cancelOpenCypherQuery(CancelOpenCypherQueryRequest $args)
    {
        $result = parent::cancelOpenCypherQuery($args->toArray());
        return new CancelOpenCypherQueryResponse($result->toArray());
    }
}
