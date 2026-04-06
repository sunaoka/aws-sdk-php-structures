<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property 'ipsec.1'|null $Type
 * @property list<VpcAttachment>|null $VpcAttachments
 * @property string|null $VpnGatewayId
 * @property int|null $AmazonSideAsn
 * @property list<Tag>|null $Tags
 */
class VpnGateway extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     Type?: 'ipsec.1'|null,
     *     VpcAttachments?: list<VpcAttachment>|null,
     *     VpnGatewayId?: string|null,
     *     AmazonSideAsn?: int|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
