<?php

namespace Sunaoka\Aws\Structures\Ssm\SendAutomationSignal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutomationExecutionId
 * @property 'Approve'|'Reject'|'StartStep'|'StopStep'|'Resume'|'Revoke' $SignalType
 * @property array<string, list<string>>|null $Payload
 */
class SendAutomationSignalRequest extends Request
{
    /**
     * @param array{
     *     AutomationExecutionId: string,
     *     SignalType: 'Approve'|'Reject'|'StartStep'|'StopStep'|'Resume'|'Revoke',
     *     Payload?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
