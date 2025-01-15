<?php

namespace Sunaoka\Aws\Structures\IdentityStore\IsMemberInGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupId
 * @property MemberId|null $MemberId
 * @property bool|null $MembershipExists
 */
class GroupMembershipExistenceResult extends Shape
{
    /**
     * @param array{
     *     GroupId?: string|null,
     *     MemberId?: MemberId|null,
     *     MembershipExists?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
