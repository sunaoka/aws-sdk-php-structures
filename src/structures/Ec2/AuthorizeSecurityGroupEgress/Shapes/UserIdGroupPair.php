<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $UserId
 * @property string $GroupName
 * @property string $GroupId
 * @property string $VpcId
 * @property string $VpcPeeringConnectionId
 * @property string $PeeringStatus
 */
class UserIdGroupPair extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     UserId?: string,
     *     GroupName?: string,
     *     GroupId?: string,
     *     VpcId?: string,
     *     VpcPeeringConnectionId?: string,
     *     PeeringStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
