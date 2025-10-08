<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecutionStatus;

trait GetCalculationExecutionStatusTrait
{
    /**
     * @param GetCalculationExecutionStatusRequest $args
     * @return GetCalculationExecutionStatusResponse
     */
    public function getCalculationExecutionStatus(GetCalculationExecutionStatusRequest $args)
    {
        $result = parent::getCalculationExecutionStatus($args->toArray());
        return new GetCalculationExecutionStatusResponse($result->toArray());
    }
}
