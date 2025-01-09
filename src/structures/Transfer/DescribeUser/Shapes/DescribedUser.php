<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $HomeDirectory
 * @property list<HomeDirectoryMapEntry> $HomeDirectoryMappings
 * @property 'PATH'|'LOGICAL' $HomeDirectoryType
 * @property string $Policy
 * @property PosixProfile $PosixProfile
 * @property string $Role
 * @property list<SshPublicKey> $SshPublicKeys
 * @property list<Tag> $Tags
 * @property string $UserName
 */
class DescribedUser extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     HomeDirectory?: string,
     *     HomeDirectoryMappings?: list<HomeDirectoryMapEntry>,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL',
     *     Policy?: string,
     *     PosixProfile?: PosixProfile,
     *     Role?: string,
     *     SshPublicKeys?: list<SshPublicKey>,
     *     Tags?: list<Tag>,
     *     UserName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
