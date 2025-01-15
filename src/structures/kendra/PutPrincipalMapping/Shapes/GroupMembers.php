<?php

namespace Sunaoka\Aws\Structures\kendra\PutPrincipalMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MemberGroup>|null $MemberGroups
 * @property list<MemberUser>|null $MemberUsers
 * @property S3Path|null $S3PathforGroupMembers
 */
class GroupMembers extends Shape
{
    /**
     * @param array{
     *     MemberGroups?: list<MemberGroup>|null,
     *     MemberUsers?: list<MemberUser>|null,
     *     S3PathforGroupMembers?: S3Path|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
