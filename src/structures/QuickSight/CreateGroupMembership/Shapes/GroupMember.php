<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateGroupMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $MemberName
 */
class GroupMember extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     MemberName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
