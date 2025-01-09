<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $startTime
 * @property int<1, 1430> $durationInMinutes
 */
class MaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     startTime: string,
     *     durationInMinutes: int<1, 1430>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
