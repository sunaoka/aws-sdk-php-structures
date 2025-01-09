<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 225> $endTimeoutMinutes
 * @property int<1, 225> $startTimeoutMinutes
 */
class DeploymentProperties extends Shape
{
    /**
     * @param array{
     *     endTimeoutMinutes?: int<1, 225>,
     *     startTimeoutMinutes?: int<1, 225>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
