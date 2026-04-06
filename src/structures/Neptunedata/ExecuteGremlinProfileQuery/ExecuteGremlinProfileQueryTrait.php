<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteGremlinProfileQuery;

trait ExecuteGremlinProfileQueryTrait
{
    /**
     * @param ExecuteGremlinProfileQueryRequest $args
     * @return ExecuteGremlinProfileQueryResponse
     */
    public function executeGremlinProfileQuery(ExecuteGremlinProfileQueryRequest $args)
    {
        $result = parent::executeGremlinProfileQuery($args->toArray());
        return new ExecuteGremlinProfileQueryResponse($result->toArray());
    }
}
