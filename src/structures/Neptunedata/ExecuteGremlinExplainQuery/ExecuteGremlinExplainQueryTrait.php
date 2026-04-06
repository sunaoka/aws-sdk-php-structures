<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteGremlinExplainQuery;

trait ExecuteGremlinExplainQueryTrait
{
    /**
     * @param ExecuteGremlinExplainQueryRequest $args
     * @return ExecuteGremlinExplainQueryResponse
     */
    public function executeGremlinExplainQuery(ExecuteGremlinExplainQueryRequest $args)
    {
        $result = parent::executeGremlinExplainQuery($args->toArray());
        return new ExecuteGremlinExplainQueryResponse($result->toArray());
    }
}
