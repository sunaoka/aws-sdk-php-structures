<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrivateDnsName
 */
class PrivateDnsDetails extends Shape
{
    /**
     * @param array{PrivateDnsName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
