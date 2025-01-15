<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HomeDirectory
 * @property list<HomeDirectoryMapEntry>|null $HomeDirectoryMappings
 * @property 'PATH'|'LOGICAL'|null $HomeDirectoryType
 * @property string|null $Policy
 * @property PosixProfile|null $PosixProfile
 * @property string|null $Role
 * @property string|null $ExternalId
 */
class DescribedAccess extends Shape
{
    /**
     * @param array{
     *     HomeDirectory?: string|null,
     *     HomeDirectoryMappings?: list<HomeDirectoryMapEntry>|null,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL'|null,
     *     Policy?: string|null,
     *     PosixProfile?: PosixProfile|null,
     *     Role?: string|null,
     *     ExternalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
