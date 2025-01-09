<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DnsName
 * @property string $HostedZoneId
 */
class DnsEntry extends Shape
{
    /**
     * @param array{
     *     DnsName?: string,
     *     HostedZoneId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
