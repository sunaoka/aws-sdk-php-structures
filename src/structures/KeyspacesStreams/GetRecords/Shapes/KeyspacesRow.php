<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, KeyspacesCell>|null $valueCells
 * @property array<string, KeyspacesCell>|null $staticCells
 * @property KeyspacesMetadata|null $rowMetadata
 */
class KeyspacesRow extends Shape
{
    /**
     * @param array{
     *     valueCells?: array<string, KeyspacesCell>|null,
     *     staticCells?: array<string, KeyspacesCell>|null,
     *     rowMetadata?: KeyspacesMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
