<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RegionalStackInstancesDeployment|null $RegionalStackInstancesDeployment
 */
class RegionalStages extends Shape
{
    /**
     * @param array{RegionalStackInstancesDeployment?: RegionalStackInstancesDeployment|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
