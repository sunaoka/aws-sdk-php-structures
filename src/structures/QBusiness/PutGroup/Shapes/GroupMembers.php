<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MemberGroup> $memberGroups
 * @property list<MemberUser> $memberUsers
 * @property S3 $s3PathForGroupMembers
 */
class GroupMembers extends Shape
{
    /**
     * @param array{
     *     memberGroups?: list<MemberGroup>,
     *     memberUsers?: list<MemberUser>,
     *     s3PathForGroupMembers?: S3
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
