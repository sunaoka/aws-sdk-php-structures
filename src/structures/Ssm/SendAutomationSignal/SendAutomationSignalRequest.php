<?php

namespace Sunaoka\Aws\Structures\Ssm\SendAutomationSignal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutomationExecutionId
 * @property 'Approve'|'Reject'|'StartStep'|'StopStep'|'Resume' $SignalType
 * @property array<string, list<string>> $Payload
 */
class SendAutomationSignalRequest extends Request
{
    /**
     * @param array{
     *     AutomationExecutionId: string,
     *     SignalType: 'Approve'|'Reject'|'StartStep'|'StopStep'|'Resume',
     *     Payload?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
