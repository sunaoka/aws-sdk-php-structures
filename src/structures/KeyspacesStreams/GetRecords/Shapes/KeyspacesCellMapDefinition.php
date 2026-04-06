<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyspacesCellValue|null $key
 * @property KeyspacesCellValue|null $value
 * @property KeyspacesMetadata|null $metadata
 */
class KeyspacesCellMapDefinition extends Shape
{
    /**
     * @param array{
     *     key?: KeyspacesCellValue|null,
     *     value?: KeyspacesCellValue|null,
     *     metadata?: KeyspacesMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
