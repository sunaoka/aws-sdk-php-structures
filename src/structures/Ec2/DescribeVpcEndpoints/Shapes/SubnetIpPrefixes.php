<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property list<string> $IpPrefixes
 */
class SubnetIpPrefixes extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string,
     *     IpPrefixes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
