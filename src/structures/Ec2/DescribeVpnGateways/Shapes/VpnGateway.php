<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AmazonSideAsn
 * @property list<Tag> $Tags
 * @property string $VpnGatewayId
 * @property 'pending'|'available'|'deleting'|'deleted' $State
 * @property 'ipsec.1' $Type
 * @property string $AvailabilityZone
 * @property list<VpcAttachment> $VpcAttachments
 */
class VpnGateway extends Shape
{
    /**
     * @param array{
     *     AmazonSideAsn?: int,
     *     Tags?: list<Tag>,
     *     VpnGatewayId?: string,
     *     State?: 'pending'|'available'|'deleting'|'deleted',
     *     Type?: 'ipsec.1',
     *     AvailabilityZone?: string,
     *     VpcAttachments?: list<VpcAttachment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
