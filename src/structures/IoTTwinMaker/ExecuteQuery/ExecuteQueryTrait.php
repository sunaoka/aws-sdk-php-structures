<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ExecuteQuery;

trait ExecuteQueryTrait
{
    /**
     * @param ExecuteQueryRequest $args
     * @return ExecuteQueryResponse
     */
    public function executeQuery(ExecuteQueryRequest $args)
    {
        $result = parent::executeQuery($args->toArray());
        return new ExecuteQueryResponse($result->toArray());
    }
}
