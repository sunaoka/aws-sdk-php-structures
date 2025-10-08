<?php

namespace Sunaoka\Aws\Structures\Ec2\SendDiagnosticInterrupt;

trait SendDiagnosticInterruptTrait
{
    /**
     * @param SendDiagnosticInterruptRequest $args
     * @return void
     */
    public function sendDiagnosticInterrupt(SendDiagnosticInterruptRequest $args)
    {
        parent::sendDiagnosticInterrupt($args->toArray());
    }
}
