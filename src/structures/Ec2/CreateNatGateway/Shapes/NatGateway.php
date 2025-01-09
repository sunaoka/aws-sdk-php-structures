<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNatGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $DeleteTime
 * @property string $FailureCode
 * @property string $FailureMessage
 * @property list<NatGatewayAddress> $NatGatewayAddresses
 * @property string $NatGatewayId
 * @property ProvisionedBandwidth $ProvisionedBandwidth
 * @property 'pending'|'failed'|'available'|'deleting'|'deleted' $State
 * @property string $SubnetId
 * @property string $VpcId
 * @property list<Tag> $Tags
 * @property 'private'|'public' $ConnectivityType
 */
class NatGateway extends Shape
{
    /**
     * @param array{
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     DeleteTime?: \Aws\Api\DateTimeResult,
     *     FailureCode?: string,
     *     FailureMessage?: string,
     *     NatGatewayAddresses?: list<NatGatewayAddress>,
     *     NatGatewayId?: string,
     *     ProvisionedBandwidth?: ProvisionedBandwidth,
     *     State?: 'pending'|'failed'|'available'|'deleting'|'deleted',
     *     SubnetId?: string,
     *     VpcId?: string,
     *     Tags?: list<Tag>,
     *     ConnectivityType?: 'private'|'public'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
