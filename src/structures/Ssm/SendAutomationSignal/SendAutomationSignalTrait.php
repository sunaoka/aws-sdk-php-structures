<?php

namespace Sunaoka\Aws\Structures\Ssm\SendAutomationSignal;

trait SendAutomationSignalTrait
{
    /**
     * @param SendAutomationSignalRequest $args
     * @return SendAutomationSignalResponse
     */
    public function sendAutomationSignal(SendAutomationSignalRequest $args)
    {
        $result = parent::sendAutomationSignal($args->toArray());
        return new SendAutomationSignalResponse($result->toArray());
    }
}
