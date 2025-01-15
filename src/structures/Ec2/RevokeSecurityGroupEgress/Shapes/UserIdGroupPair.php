<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $UserId
 * @property string|null $GroupName
 * @property string|null $GroupId
 * @property string|null $VpcId
 * @property string|null $VpcPeeringConnectionId
 * @property string|null $PeeringStatus
 */
class UserIdGroupPair extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     UserId?: string|null,
     *     GroupName?: string|null,
     *     GroupId?: string|null,
     *     VpcId?: string|null,
     *     VpcPeeringConnectionId?: string|null,
     *     PeeringStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
