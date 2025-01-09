<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsPaths\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $FromPort
 * @property int<0, 65535> $ToPort
 */
class FilterPortRange extends Shape
{
    /**
     * @param array{
     *     FromPort?: int<0, 65535>,
     *     ToPort?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
