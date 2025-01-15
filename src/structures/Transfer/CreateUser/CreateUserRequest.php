<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HomeDirectory
 * @property 'PATH'|'LOGICAL'|null $HomeDirectoryType
 * @property list<Shapes\HomeDirectoryMapEntry>|null $HomeDirectoryMappings
 * @property string|null $Policy
 * @property Shapes\PosixProfile|null $PosixProfile
 * @property string $Role
 * @property string $ServerId
 * @property string|null $SshPublicKeyBody
 * @property list<Shapes\Tag>|null $Tags
 * @property string $UserName
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     HomeDirectory?: string|null,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL'|null,
     *     HomeDirectoryMappings?: list<Shapes\HomeDirectoryMapEntry>|null,
     *     Policy?: string|null,
     *     PosixProfile?: Shapes\PosixProfile|null,
     *     Role: string,
     *     ServerId: string,
     *     SshPublicKeyBody?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     UserName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
