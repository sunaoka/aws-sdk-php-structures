<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOURS'|'DAYS' $Unit
 * @property int $Value
 */
class RefreshScheduleFrequency extends Shape
{
    /**
     * @param array{
     *     Unit?: 'HOURS'|'DAYS',
     *     Value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
