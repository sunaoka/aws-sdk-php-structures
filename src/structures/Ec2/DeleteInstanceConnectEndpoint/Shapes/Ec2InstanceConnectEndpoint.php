<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInstanceConnectEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $InstanceConnectEndpointId
 * @property string $InstanceConnectEndpointArn
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed' $State
 * @property string $StateMessage
 * @property string $DnsName
 * @property string $FipsDnsName
 * @property list<string> $NetworkInterfaceIds
 * @property string $VpcId
 * @property string $AvailabilityZone
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $SubnetId
 * @property bool $PreserveClientIp
 * @property list<string> $SecurityGroupIds
 * @property list<Tag> $Tags
 */
class Ec2InstanceConnectEndpoint extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     InstanceConnectEndpointId?: string,
     *     InstanceConnectEndpointArn?: string,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed',
     *     StateMessage?: string,
     *     DnsName?: string,
     *     FipsDnsName?: string,
     *     NetworkInterfaceIds?: list<string>,
     *     VpcId?: string,
     *     AvailabilityZone?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     SubnetId?: string,
     *     PreserveClientIp?: bool,
     *     SecurityGroupIds?: list<string>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
