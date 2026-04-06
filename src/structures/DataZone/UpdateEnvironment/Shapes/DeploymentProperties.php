<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 225>|null $startTimeoutMinutes
 * @property int<1, 225>|null $endTimeoutMinutes
 */
class DeploymentProperties extends Shape
{
    /**
     * @param array{
     *     startTimeoutMinutes?: int<1, 225>|null,
     *     endTimeoutMinutes?: int<1, 225>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
