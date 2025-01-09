<?php

namespace Sunaoka\Aws\Structures\kendra\PutPrincipalMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MemberGroup> $MemberGroups
 * @property list<MemberUser> $MemberUsers
 * @property S3Path $S3PathforGroupMembers
 */
class GroupMembers extends Shape
{
    /**
     * @param array{
     *     MemberGroups?: list<MemberGroup>,
     *     MemberUsers?: list<MemberUser>,
     *     S3PathforGroupMembers?: S3Path
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
