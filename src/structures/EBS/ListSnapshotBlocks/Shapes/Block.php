<?php

namespace Sunaoka\Aws\Structures\EBS\ListSnapshotBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BlockIndex
 * @property string $BlockToken
 */
class Block extends Shape
{
    /**
     * @param array{
     *     BlockIndex?: int,
     *     BlockToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
