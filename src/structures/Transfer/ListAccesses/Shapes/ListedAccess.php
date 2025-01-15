<?php

namespace Sunaoka\Aws\Structures\Transfer\ListAccesses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HomeDirectory
 * @property 'PATH'|'LOGICAL'|null $HomeDirectoryType
 * @property string|null $Role
 * @property string|null $ExternalId
 */
class ListedAccess extends Shape
{
    /**
     * @param array{
     *     HomeDirectory?: string|null,
     *     HomeDirectoryType?: 'PATH'|'LOGICAL'|null,
     *     Role?: string|null,
     *     ExternalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
