<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\ApproveTimeOff;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $UserId
 * @property string $TimeOffId
 * @property string|null $Description
 * @property 'REJECT'|'OVERRIDE'|null $RuleFailureAction
 */
class ApproveTimeOffRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     UserId: string,
     *     TimeOffId: string,
     *     Description?: string|null,
     *     RuleFailureAction?: 'REJECT'|'OVERRIDE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
