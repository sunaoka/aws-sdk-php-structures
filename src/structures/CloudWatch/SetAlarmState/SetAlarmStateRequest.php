<?php

namespace Sunaoka\Aws\Structures\CloudWatch\SetAlarmState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlarmName
 * @property 'OK'|'ALARM'|'INSUFFICIENT_DATA' $StateValue
 * @property string $StateReason
 * @property string $StateReasonData
 */
class SetAlarmStateRequest extends Request
{
    /**
     * @param array{
     *     AlarmName: string,
     *     StateValue: 'OK'|'ALARM'|'INSUFFICIENT_DATA',
     *     StateReason: string,
     *     StateReasonData?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
