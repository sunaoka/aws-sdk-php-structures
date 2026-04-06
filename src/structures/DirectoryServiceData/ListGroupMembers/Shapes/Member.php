<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroupMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER'|'GROUP'|'COMPUTER' $MemberType
 * @property string $SAMAccountName
 * @property string $SID
 */
class Member extends Shape
{
    /**
     * @param array{
     *     MemberType: 'USER'|'GROUP'|'COMPUTER',
     *     SAMAccountName: string,
     *     SID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
