<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $linearPercentage
 * @property int|null $linearInterval
 */
class TimeBasedLinear extends Shape
{
    /**
     * @param array{
     *     linearPercentage?: int|null,
     *     linearInterval?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
