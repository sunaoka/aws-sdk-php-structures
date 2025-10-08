<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelGremlinQuery;

trait CancelGremlinQueryTrait
{
    /**
     * @param CancelGremlinQueryRequest $args
     * @return CancelGremlinQueryResponse
     */
    public function cancelGremlinQuery(CancelGremlinQueryRequest $args)
    {
        $result = parent::cancelGremlinQuery($args->toArray());
        return new CancelGremlinQueryResponse($result->toArray());
    }
}
