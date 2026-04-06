<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteGremlinQuery;

trait ExecuteGremlinQueryTrait
{
    /**
     * @param ExecuteGremlinQueryRequest $args
     * @return ExecuteGremlinQueryResponse
     */
    public function executeGremlinQuery(ExecuteGremlinQueryRequest $args)
    {
        $result = parent::executeGremlinQuery($args->toArray());
        return new ExecuteGremlinQueryResponse($result->toArray());
    }
}
