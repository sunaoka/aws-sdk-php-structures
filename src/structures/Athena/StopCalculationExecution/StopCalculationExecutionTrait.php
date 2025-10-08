<?php

namespace Sunaoka\Aws\Structures\Athena\StopCalculationExecution;

trait StopCalculationExecutionTrait
{
    /**
     * @param StopCalculationExecutionRequest $args
     * @return StopCalculationExecutionResponse
     */
    public function stopCalculationExecution(StopCalculationExecutionRequest $args)
    {
        $result = parent::stopCalculationExecution($args->toArray());
        return new StopCalculationExecutionResponse($result->toArray());
    }
}
