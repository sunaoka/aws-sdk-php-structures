<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyspacesCellValue|null $value
 * @property KeyspacesMetadata|null $metadata
 */
class KeyspacesCell extends Shape
{
    /**
     * @param array{
     *     value?: KeyspacesCellValue|null,
     *     metadata?: KeyspacesMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
