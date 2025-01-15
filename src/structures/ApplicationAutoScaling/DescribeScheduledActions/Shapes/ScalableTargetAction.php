<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MinCapacity
 * @property int|null $MaxCapacity
 */
class ScalableTargetAction extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: int|null,
     *     MaxCapacity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
