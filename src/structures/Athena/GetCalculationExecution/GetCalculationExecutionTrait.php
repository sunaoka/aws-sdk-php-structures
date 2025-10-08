<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecution;

trait GetCalculationExecutionTrait
{
    /**
     * @param GetCalculationExecutionRequest $args
     * @return GetCalculationExecutionResponse
     */
    public function getCalculationExecution(GetCalculationExecutionRequest $args)
    {
        $result = parent::getCalculationExecution($args->toArray());
        return new GetCalculationExecutionResponse($result->toArray());
    }
}
