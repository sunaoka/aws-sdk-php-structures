<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $linearPercentage
 * @property int $linearInterval
 */
class TimeBasedLinear extends Shape
{
    /**
     * @param array{
     *     linearPercentage?: int,
     *     linearInterval?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
