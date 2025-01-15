<?php

namespace Sunaoka\Aws\Structures\Transfer\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $HomeDirectory
 * @property 'PATH'|'LOGICAL'|null $HomeDirectoryType
 * @property string|null $Role
 * @property int|null $SshPublicKeyCount
 * @property string|null $UserName
 */
class ListedUser extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     HomeDirectory?: string|null,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL'|null,
     *     Role?: string|null,
     *     SshPublicKeyCount?: int|null,
     *     UserName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
