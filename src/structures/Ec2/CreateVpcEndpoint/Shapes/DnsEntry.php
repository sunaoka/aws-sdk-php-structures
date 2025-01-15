<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DnsName
 * @property string|null $HostedZoneId
 */
class DnsEntry extends Shape
{
    /**
     * @param array{
     *     DnsName?: string|null,
     *     HostedZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
