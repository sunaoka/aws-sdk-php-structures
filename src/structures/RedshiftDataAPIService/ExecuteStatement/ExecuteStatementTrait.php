<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ExecuteStatement;

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
