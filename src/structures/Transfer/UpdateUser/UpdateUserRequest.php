<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HomeDirectory
 * @property 'PATH'|'LOGICAL' $HomeDirectoryType
 * @property list<Shapes\HomeDirectoryMapEntry> $HomeDirectoryMappings
 * @property string $Policy
 * @property Shapes\PosixProfile $PosixProfile
 * @property string $Role
 * @property string $ServerId
 * @property string $UserName
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     HomeDirectory?: string,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL',
     *     HomeDirectoryMappings?: list<Shapes\HomeDirectoryMapEntry>,
     *     Policy?: string,
     *     PosixProfile?: Shapes\PosixProfile,
     *     Role?: string,
     *     ServerId: string,
     *     UserName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
