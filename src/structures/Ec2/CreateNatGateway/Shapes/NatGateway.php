<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNatGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $DeleteTime
 * @property string|null $FailureCode
 * @property string|null $FailureMessage
 * @property list<NatGatewayAddress>|null $NatGatewayAddresses
 * @property string|null $NatGatewayId
 * @property ProvisionedBandwidth|null $ProvisionedBandwidth
 * @property 'pending'|'failed'|'available'|'deleting'|'deleted'|null $State
 * @property string|null $SubnetId
 * @property string|null $VpcId
 * @property list<Tag>|null $Tags
 * @property 'private'|'public'|null $ConnectivityType
 * @property 'zonal'|'regional'|null $AvailabilityMode
 * @property 'enabled'|'disabled'|null $AutoScalingIps
 * @property 'enabled'|'disabled'|null $AutoProvisionZones
 * @property string|null $RouteTableId
 */
class NatGateway extends Shape
{
    /**
     * @param array{
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     DeleteTime?: \Aws\Api\DateTimeResult|null,
     *     FailureCode?: string|null,
     *     FailureMessage?: string|null,
     *     NatGatewayAddresses?: list<NatGatewayAddress>|null,
     *     NatGatewayId?: string|null,
     *     ProvisionedBandwidth?: ProvisionedBandwidth|null,
     *     State?: 'pending'|'failed'|'available'|'deleting'|'deleted'|null,
     *     SubnetId?: string|null,
     *     VpcId?: string|null,
     *     Tags?: list<Tag>|null,
     *     ConnectivityType?: 'private'|'public'|null,
     *     AvailabilityMode?: 'zonal'|'regional'|null,
     *     AutoScalingIps?: 'enabled'|'disabled'|null,
     *     AutoProvisionZones?: 'enabled'|'disabled'|null,
     *     RouteTableId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
