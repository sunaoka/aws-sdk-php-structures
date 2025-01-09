<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string $PeeringStatus
 * @property string $UserId
 * @property string $VpcId
 * @property string $VpcPeeringConnectionId
 */
class ReferencedSecurityGroup extends Shape
{
    /**
     * @param array{
     *     GroupId?: string,
     *     PeeringStatus?: string,
     *     UserId?: string,
     *     VpcId?: string,
     *     VpcPeeringConnectionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
