<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\CreateTimeOff;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $UserId
 * @property string $ShiftActivityId
 * @property \Aws\Api\DateTimeResult $StartAt
 * @property \Aws\Api\DateTimeResult $EndAt
 * @property string|null $Description
 * @property 'AWAIT_APPROVAL'|'AUTOMATIC' $ApprovalType
 * @property 'REJECT'|'OVERRIDE'|null $RuleFailureAction
 * @property string|null $ClientToken
 */
class CreateTimeOffRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     UserId: string,
     *     ShiftActivityId: string,
     *     StartAt: \Aws\Api\DateTimeResult,
     *     EndAt: \Aws\Api\DateTimeResult,
     *     Description?: string|null,
     *     ApprovalType: 'AWAIT_APPROVAL'|'AUTOMATIC',
     *     RuleFailureAction?: 'REJECT'|'OVERRIDE'|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
