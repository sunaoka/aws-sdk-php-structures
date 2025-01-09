<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptVpcPeeringConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcPeeringConnectionVpcInfo $AccepterVpcInfo
 * @property \Aws\Api\DateTimeResult $ExpirationTime
 * @property VpcPeeringConnectionVpcInfo $RequesterVpcInfo
 * @property VpcPeeringConnectionStateReason $Status
 * @property list<Tag> $Tags
 * @property string $VpcPeeringConnectionId
 */
class VpcPeeringConnection extends Shape
{
    /**
     * @param array{
     *     AccepterVpcInfo?: VpcPeeringConnectionVpcInfo,
     *     ExpirationTime?: \Aws\Api\DateTimeResult,
     *     RequesterVpcInfo?: VpcPeeringConnectionVpcInfo,
     *     Status?: VpcPeeringConnectionStateReason,
     *     Tags?: list<Tag>,
     *     VpcPeeringConnectionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
