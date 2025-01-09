<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $canaryPercentage
 * @property int $canaryInterval
 */
class TimeBasedCanary extends Shape
{
    /**
     * @param array{
     *     canaryPercentage?: int,
     *     canaryInterval?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
