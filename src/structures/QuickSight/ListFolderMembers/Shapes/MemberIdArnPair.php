<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFolderMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MemberId
 * @property string|null $MemberArn
 */
class MemberIdArnPair extends Shape
{
    /**
     * @param array{
     *     MemberId?: string|null,
     *     MemberArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
