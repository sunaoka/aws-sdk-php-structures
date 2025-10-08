<?php

namespace Sunaoka\Aws\Structures\Athena\StartCalculationExecution;

trait StartCalculationExecutionTrait
{
    /**
     * @param StartCalculationExecutionRequest $args
     * @return StartCalculationExecutionResponse
     */
    public function startCalculationExecution(StartCalculationExecutionRequest $args)
    {
        $result = parent::startCalculationExecution($args->toArray());
        return new StartCalculationExecutionResponse($result->toArray());
    }
}
