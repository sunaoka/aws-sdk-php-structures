<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AmazonSideAsn
 * @property list<Tag>|null $Tags
 * @property string|null $VpnGatewayId
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property 'ipsec.1'|null $Type
 * @property string|null $AvailabilityZone
 * @property list<VpcAttachment>|null $VpcAttachments
 */
class VpnGateway extends Shape
{
    /**
     * @param array{
     *     AmazonSideAsn?: int|null,
     *     Tags?: list<Tag>|null,
     *     VpnGatewayId?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     Type?: 'ipsec.1'|null,
     *     AvailabilityZone?: string|null,
     *     VpcAttachments?: list<VpcAttachment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
