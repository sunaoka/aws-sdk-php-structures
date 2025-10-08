<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteOpenCypherExplainQuery;

trait ExecuteOpenCypherExplainQueryTrait
{
    /**
     * @param ExecuteOpenCypherExplainQueryRequest $args
     * @return ExecuteOpenCypherExplainQueryResponse
     */
    public function executeOpenCypherExplainQuery(ExecuteOpenCypherExplainQueryRequest $args)
    {
        $result = parent::executeOpenCypherExplainQuery($args->toArray());
        return new ExecuteOpenCypherExplainQueryResponse($result->toArray());
    }
}
