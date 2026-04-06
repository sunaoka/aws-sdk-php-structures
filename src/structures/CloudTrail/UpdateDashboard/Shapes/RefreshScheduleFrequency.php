<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOURS'|'DAYS'|null $Unit
 * @property int|null $Value
 */
class RefreshScheduleFrequency extends Shape
{
    /**
     * @param array{
     *     Unit?: 'HOURS'|'DAYS'|null,
     *     Value?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
