<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptVpcPeeringConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcPeeringConnectionVpcInfo|null $AccepterVpcInfo
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property VpcPeeringConnectionVpcInfo|null $RequesterVpcInfo
 * @property VpcPeeringConnectionStateReason|null $Status
 * @property list<Tag>|null $Tags
 * @property string|null $VpcPeeringConnectionId
 */
class VpcPeeringConnection extends Shape
{
    /**
     * @param array{
     *     AccepterVpcInfo?: VpcPeeringConnectionVpcInfo|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     RequesterVpcInfo?: VpcPeeringConnectionVpcInfo|null,
     *     Status?: VpcPeeringConnectionStateReason|null,
     *     Tags?: list<Tag>|null,
     *     VpcPeeringConnectionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
