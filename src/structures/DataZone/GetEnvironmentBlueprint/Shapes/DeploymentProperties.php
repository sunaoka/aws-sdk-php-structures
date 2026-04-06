<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentBlueprint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 225>|null $endTimeoutMinutes
 * @property int<1, 225>|null $startTimeoutMinutes
 */
class DeploymentProperties extends Shape
{
    /**
     * @param array{
     *     endTimeoutMinutes?: int<1, 225>|null,
     *     startTimeoutMinutes?: int<1, 225>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
