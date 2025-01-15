<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $canaryPercentage
 * @property int|null $canaryInterval
 */
class TimeBasedCanary extends Shape
{
    /**
     * @param array{
     *     canaryPercentage?: int|null,
     *     canaryInterval?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
