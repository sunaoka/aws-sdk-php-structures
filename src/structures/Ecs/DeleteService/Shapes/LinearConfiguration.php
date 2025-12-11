<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $stepPercent
 * @property int|null $stepBakeTimeInMinutes
 */
class LinearConfiguration extends Shape
{
    /**
     * @param array{
     *     stepPercent?: double|null,
     *     stepBakeTimeInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
