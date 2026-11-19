<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RegionalStages|null $Stages
 */
class RegionalStatusDetail extends Shape
{
    /**
     * @param array{Stages?: RegionalStages|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
