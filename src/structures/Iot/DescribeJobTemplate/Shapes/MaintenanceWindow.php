<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $startTime
 * @property int $durationInMinutes
 */
class MaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     startTime: string,
     *     durationInMinutes: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
