<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $canaryPercent
 * @property int|null $canaryBakeTimeInMinutes
 */
class CanaryConfiguration extends Shape
{
    /**
     * @param array{
     *     canaryPercent?: double|null,
     *     canaryBakeTimeInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
