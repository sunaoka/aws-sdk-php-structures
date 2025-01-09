<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateAccelerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcceleratorArn
 * @property string $Name
 * @property 'IPV4'|'DUAL_STACK' $IpAddressType
 * @property bool $Enabled
 * @property list<IpSet> $IpSets
 * @property string $DnsName
 * @property 'DEPLOYED'|'IN_PROGRESS' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $DualStackDnsName
 * @property list<AcceleratorEvent> $Events
 */
class Accelerator extends Shape
{
    /**
     * @param array{
     *     AcceleratorArn?: string,
     *     Name?: string,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK',
     *     Enabled?: bool,
     *     IpSets?: list<IpSet>,
     *     DnsName?: string,
     *     Status?: 'DEPLOYED'|'IN_PROGRESS',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     DualStackDnsName?: string,
     *     Events?: list<AcceleratorEvent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
