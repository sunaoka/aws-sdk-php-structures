<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetPreparedStatement;

trait BatchGetPreparedStatementTrait
{
    /**
     * @param BatchGetPreparedStatementRequest $args
     * @return BatchGetPreparedStatementResponse
     */
    public function batchGetPreparedStatement(BatchGetPreparedStatementRequest $args)
    {
        $result = parent::batchGetPreparedStatement($args->toArray());
        return new BatchGetPreparedStatementResponse($result->toArray());
    }
}
