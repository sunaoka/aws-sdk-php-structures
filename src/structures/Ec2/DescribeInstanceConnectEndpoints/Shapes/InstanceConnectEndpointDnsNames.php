<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceConnectEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DnsName
 * @property string|null $FipsDnsName
 */
class InstanceConnectEndpointDnsNames extends Shape
{
    /**
     * @param array{
     *     DnsName?: string|null,
     *     FipsDnsName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
