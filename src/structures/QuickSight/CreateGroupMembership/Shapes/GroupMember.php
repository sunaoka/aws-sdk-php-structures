<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateGroupMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $MemberName
 */
class GroupMember extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     MemberName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
