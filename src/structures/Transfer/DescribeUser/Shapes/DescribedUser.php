<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $HomeDirectory
 * @property list<HomeDirectoryMapEntry>|null $HomeDirectoryMappings
 * @property 'PATH'|'LOGICAL'|null $HomeDirectoryType
 * @property string|null $Policy
 * @property PosixProfile|null $PosixProfile
 * @property string|null $Role
 * @property list<SshPublicKey>|null $SshPublicKeys
 * @property list<Tag>|null $Tags
 * @property string|null $UserName
 */
class DescribedUser extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     HomeDirectory?: string|null,
     *     HomeDirectoryMappings?: list<HomeDirectoryMapEntry>|null,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL'|null,
     *     Policy?: string|null,
     *     PosixProfile?: PosixProfile|null,
     *     Role?: string|null,
     *     SshPublicKeys?: list<SshPublicKey>|null,
     *     Tags?: list<Tag>|null,
     *     UserName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
