<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement;

trait ExecuteStatementTrait
{
    /**
     * @param ExecuteStatementRequest $args
     * @return ExecuteStatementResponse
     */
    public function executeStatement(ExecuteStatementRequest $args)
    {
        $result = parent::executeStatement($args->toArray());
        return new ExecuteStatementResponse($result->toArray());
    }
}
