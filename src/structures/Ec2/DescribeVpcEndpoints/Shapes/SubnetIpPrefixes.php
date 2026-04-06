<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property list<string>|null $IpPrefixes
 */
class SubnetIpPrefixes extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     IpPrefixes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
