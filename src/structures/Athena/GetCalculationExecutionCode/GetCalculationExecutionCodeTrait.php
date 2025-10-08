<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecutionCode;

trait GetCalculationExecutionCodeTrait
{
    /**
     * @param GetCalculationExecutionCodeRequest $args
     * @return GetCalculationExecutionCodeResponse
     */
    public function getCalculationExecutionCode(GetCalculationExecutionCodeRequest $args)
    {
        $result = parent::getCalculationExecutionCode($args->toArray());
        return new GetCalculationExecutionCodeResponse($result->toArray());
    }
}
