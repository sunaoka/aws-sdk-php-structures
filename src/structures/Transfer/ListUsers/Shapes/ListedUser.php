<?php

namespace Sunaoka\Aws\Structures\Transfer\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $HomeDirectory
 * @property 'PATH'|'LOGICAL' $HomeDirectoryType
 * @property string $Role
 * @property int $SshPublicKeyCount
 * @property string $UserName
 */
class ListedUser extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     HomeDirectory?: string,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL',
     *     Role?: string,
     *     SshPublicKeyCount?: int,
     *     UserName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
