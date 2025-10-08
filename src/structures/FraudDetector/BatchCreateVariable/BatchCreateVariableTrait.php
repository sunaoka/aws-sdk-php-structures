<?php

namespace Sunaoka\Aws\Structures\FraudDetector\BatchCreateVariable;

trait BatchCreateVariableTrait
{
    /**
     * @param BatchCreateVariableRequest $args
     * @return BatchCreateVariableResponse
     */
    public function batchCreateVariable(BatchCreateVariableRequest $args)
    {
        $result = parent::batchCreateVariable($args->toArray());
        return new BatchCreateVariableResponse($result->toArray());
    }
}
