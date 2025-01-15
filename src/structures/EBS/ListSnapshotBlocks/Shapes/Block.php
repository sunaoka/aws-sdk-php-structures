<?php

namespace Sunaoka\Aws\Structures\EBS\ListSnapshotBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $BlockIndex
 * @property string|null $BlockToken
 */
class Block extends Shape
{
    /**
     * @param array{
     *     BlockIndex?: int<0, max>|null,
     *     BlockToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
