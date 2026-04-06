<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $GroupId
 * @property string|null $GroupName
 * @property string|null $PeeringStatus
 * @property string|null $UserId
 * @property string|null $VpcId
 * @property string|null $VpcPeeringConnectionId
 */
class UserIdGroupPair extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     GroupId?: string|null,
     *     GroupName?: string|null,
     *     PeeringStatus?: string|null,
     *     UserId?: string|null,
     *     VpcId?: string|null,
     *     VpcPeeringConnectionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
