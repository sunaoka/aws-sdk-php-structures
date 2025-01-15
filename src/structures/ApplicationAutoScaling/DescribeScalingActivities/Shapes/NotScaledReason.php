<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property int|null $MaxCapacity
 * @property int|null $MinCapacity
 * @property int|null $CurrentCapacity
 */
class NotScaledReason extends Shape
{
    /**
     * @param array{
     *     Code: string,
     *     MaxCapacity?: int|null,
     *     MinCapacity?: int|null,
     *     CurrentCapacity?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
