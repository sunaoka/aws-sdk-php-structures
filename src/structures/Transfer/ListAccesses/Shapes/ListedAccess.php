<?php

namespace Sunaoka\Aws\Structures\Transfer\ListAccesses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HomeDirectory
 * @property 'PATH'|'LOGICAL' $HomeDirectoryType
 * @property string $Role
 * @property string $ExternalId
 */
class ListedAccess extends Shape
{
    /**
     * @param array{
     *     HomeDirectory?: string,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL',
     *     Role?: string,
     *     ExternalId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
