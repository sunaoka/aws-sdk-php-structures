<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFolderMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MemberId
 * @property string $MemberArn
 */
class MemberIdArnPair extends Shape
{
    /**
     * @param array{
     *     MemberId?: string,
     *     MemberArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
