<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RefreshScheduleFrequency $Frequency
 * @property 'ENABLED'|'DISABLED' $Status
 * @property string $TimeOfDay
 */
class RefreshSchedule extends Shape
{
    /**
     * @param array{
     *     Frequency?: RefreshScheduleFrequency,
     *     Status?: 'ENABLED'|'DISABLED',
     *     TimeOfDay?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
