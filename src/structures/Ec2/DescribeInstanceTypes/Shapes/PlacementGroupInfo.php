<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'cluster'|'partition'|'spread'> $SupportedStrategies
 */
class PlacementGroupInfo extends Shape
{
    /**
     * @param array{SupportedStrategies?: list<'cluster'|'partition'|'spread'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
