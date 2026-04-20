<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayId
 * @property string|null $TransitGatewayAttachmentId
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $AvailabilityZoneIds
 */
class TransitGatewayConfigurationDescribeEndpointStructure extends Shape
{
    /**
     * @param array{
     *     TransitGatewayId?: string|null,
     *     TransitGatewayAttachmentId?: string|null,
     *     AvailabilityZones?: list<string>|null,
     *     AvailabilityZoneIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
