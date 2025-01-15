<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingAccelerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AcceleratorArn
 * @property string|null $Name
 * @property 'IPV4'|'DUAL_STACK'|null $IpAddressType
 * @property bool|null $Enabled
 * @property list<IpSet>|null $IpSets
 * @property string|null $DnsName
 * @property 'DEPLOYED'|'IN_PROGRESS'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class CustomRoutingAccelerator extends Shape
{
    /**
     * @param array{
     *     AcceleratorArn?: string|null,
     *     Name?: string|null,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK'|null,
     *     Enabled?: bool|null,
     *     IpSets?: list<IpSet>|null,
     *     DnsName?: string|null,
     *     Status?: 'DEPLOYED'|'IN_PROGRESS'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
