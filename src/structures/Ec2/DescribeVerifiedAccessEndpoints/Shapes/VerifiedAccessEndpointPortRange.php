<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $FromPort
 * @property int<1, 65535> $ToPort
 */
class VerifiedAccessEndpointPortRange extends Shape
{
    /**
     * @param array{
     *     FromPort?: int<1, 65535>,
     *     ToPort?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
