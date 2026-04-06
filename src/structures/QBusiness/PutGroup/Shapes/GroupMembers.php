<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MemberGroup>|null $memberGroups
 * @property list<MemberUser>|null $memberUsers
 * @property S3|null $s3PathForGroupMembers
 */
class GroupMembers extends Shape
{
    /**
     * @param array{
     *     memberGroups?: list<MemberGroup>|null,
     *     memberUsers?: list<MemberUser>|null,
     *     s3PathForGroupMembers?: S3|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
