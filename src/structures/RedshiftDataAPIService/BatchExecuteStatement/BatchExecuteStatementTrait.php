<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\BatchExecuteStatement;

trait BatchExecuteStatementTrait
{
    /**
     * @param BatchExecuteStatementRequest $args
     * @return BatchExecuteStatementResponse
     */
    public function batchExecuteStatement(BatchExecuteStatementRequest $args)
    {
        $result = parent::batchExecuteStatement($args->toArray());
        return new BatchExecuteStatementResponse($result->toArray());
    }
}
