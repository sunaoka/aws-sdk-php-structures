<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceConnectEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $InstanceConnectEndpointId
 * @property string|null $InstanceConnectEndpointArn
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'update-in-progress'|'update-complete'|'update-failed'|null $State
 * @property string|null $StateMessage
 * @property string|null $DnsName
 * @property string|null $FipsDnsName
 * @property list<string>|null $NetworkInterfaceIds
 * @property string|null $VpcId
 * @property string|null $AvailabilityZone
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $SubnetId
 * @property bool|null $PreserveClientIp
 * @property list<string>|null $SecurityGroupIds
 * @property list<Tag>|null $Tags
 * @property 'ipv4'|'dualstack'|'ipv6'|null $IpAddressType
 * @property InstanceConnectEndpointPublicDnsNames|null $PublicDnsNames
 */
class Ec2InstanceConnectEndpoint extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     InstanceConnectEndpointId?: string|null,
     *     InstanceConnectEndpointArn?: string|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'update-in-progress'|'update-complete'|'update-failed'|null,
     *     StateMessage?: string|null,
     *     DnsName?: string|null,
     *     FipsDnsName?: string|null,
     *     NetworkInterfaceIds?: list<string>|null,
     *     VpcId?: string|null,
     *     AvailabilityZone?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     SubnetId?: string|null,
     *     PreserveClientIp?: bool|null,
     *     SecurityGroupIds?: list<string>|null,
     *     Tags?: list<Tag>|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6'|null,
     *     PublicDnsNames?: InstanceConnectEndpointPublicDnsNames|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
