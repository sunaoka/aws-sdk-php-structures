<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinCapacity
 * @property int $MaxCapacity
 */
class ScalableTargetAction extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: int,
     *     MaxCapacity?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
