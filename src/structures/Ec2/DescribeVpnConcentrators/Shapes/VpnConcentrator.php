<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConcentrators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpnConcentratorId
 * @property string|null $State
 * @property string|null $TransitGatewayId
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $Type
 * @property list<Tag>|null $Tags
 */
class VpnConcentrator extends Shape
{
    /**
     * @param array{
     *     VpnConcentratorId?: string|null,
     *     State?: string|null,
     *     TransitGatewayId?: string|null,
     *     TransitGatewayAttachmentId?: string|null,
     *     Type?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
