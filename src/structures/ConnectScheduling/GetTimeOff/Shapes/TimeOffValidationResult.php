<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\GetTimeOff\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WARNING'|'ERROR' $Severity
 * @property 'INSUFFICIENT_USER_TIME_OFF_BALANCE'|'INSUFFICIENT_GROUP_TIME_OFF_ALLOWANCE'|'INSUFFICIENT_STAFFING_GROUP_TIME_OFF_ALLOWANCE'|'CONFLICTING_TIME_OFF_REQUEST' $Code
 */
class TimeOffValidationResult extends Shape
{
    /**
     * @param array{
     *     Severity: 'WARNING'|'ERROR',
     *     Code: 'INSUFFICIENT_USER_TIME_OFF_BALANCE'|'INSUFFICIENT_GROUP_TIME_OFF_ALLOWANCE'|'INSUFFICIENT_STAFFING_GROUP_TIME_OFF_ALLOWANCE'|'CONFLICTING_TIME_OFF_REQUEST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
