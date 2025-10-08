<?php

namespace Sunaoka\Aws\Structures\FraudDetector\BatchGetVariable;

trait BatchGetVariableTrait
{
    /**
     * @param BatchGetVariableRequest $args
     * @return BatchGetVariableResponse
     */
    public function batchGetVariable(BatchGetVariableRequest $args)
    {
        $result = parent::batchGetVariable($args->toArray());
        return new BatchGetVariableResponse($result->toArray());
    }
}
