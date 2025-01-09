<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HomeDirectory
 * @property list<HomeDirectoryMapEntry> $HomeDirectoryMappings
 * @property 'PATH'|'LOGICAL' $HomeDirectoryType
 * @property string $Policy
 * @property PosixProfile $PosixProfile
 * @property string $Role
 * @property string $ExternalId
 */
class DescribedAccess extends Shape
{
    /**
     * @param array{
     *     HomeDirectory?: string,
     *     HomeDirectoryMappings?: list<HomeDirectoryMapEntry>,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL',
     *     Policy?: string,
     *     PosixProfile?: PosixProfile,
     *     Role?: string,
     *     ExternalId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
