<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrivateDnsName
 */
class PrivateDnsDetails extends Shape
{
    /**
     * @param array{PrivateDnsName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
