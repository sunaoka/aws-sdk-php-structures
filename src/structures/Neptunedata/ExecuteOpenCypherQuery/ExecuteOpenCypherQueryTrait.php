<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteOpenCypherQuery;

trait ExecuteOpenCypherQueryTrait
{
    /**
     * @param ExecuteOpenCypherQueryRequest $args
     * @return ExecuteOpenCypherQueryResponse
     */
    public function executeOpenCypherQuery(ExecuteOpenCypherQueryRequest $args)
    {
        $result = parent::executeOpenCypherQuery($args->toArray());
        return new ExecuteOpenCypherQueryResponse($result->toArray());
    }
}
