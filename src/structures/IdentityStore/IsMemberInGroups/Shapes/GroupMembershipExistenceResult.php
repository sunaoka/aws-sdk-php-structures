<?php

namespace Sunaoka\Aws\Structures\IdentityStore\IsMemberInGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property MemberId $MemberId
 * @property bool $MembershipExists
 */
class GroupMembershipExistenceResult extends Shape
{
    /**
     * @param array{
     *     GroupId?: string,
     *     MemberId?: MemberId,
     *     MembershipExists?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
