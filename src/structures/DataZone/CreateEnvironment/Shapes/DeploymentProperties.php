<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $endTimeoutMinutes
 * @property int $startTimeoutMinutes
 */
class DeploymentProperties extends Shape
{
    /**
     * @param array{
     *     endTimeoutMinutes?: int,
     *     startTimeoutMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
