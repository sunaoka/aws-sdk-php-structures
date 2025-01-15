<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RefreshScheduleFrequency|null $Frequency
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property string|null $TimeOfDay
 */
class RefreshSchedule extends Shape
{
    /**
     * @param array{
     *     Frequency?: RefreshScheduleFrequency|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     TimeOfDay?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
