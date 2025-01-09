<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property int $MaxCapacity
 * @property int $MinCapacity
 * @property int $CurrentCapacity
 */
class NotScaledReason extends Shape
{
    /**
     * @param array{
     *     Code: string,
     *     MaxCapacity?: int,
     *     MinCapacity?: int,
     *     CurrentCapacity?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
