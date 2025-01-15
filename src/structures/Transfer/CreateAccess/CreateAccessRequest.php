<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HomeDirectory
 * @property 'PATH'|'LOGICAL'|null $HomeDirectoryType
 * @property list<Shapes\HomeDirectoryMapEntry>|null $HomeDirectoryMappings
 * @property string|null $Policy
 * @property Shapes\PosixProfile|null $PosixProfile
 * @property string $Role
 * @property string $ServerId
 * @property string $ExternalId
 */
class CreateAccessRequest extends Request
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
     *     ExternalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
