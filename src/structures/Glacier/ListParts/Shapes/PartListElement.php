<?php

namespace Sunaoka\Aws\Structures\Glacier\ListParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RangeInBytes
 * @property string $SHA256TreeHash
 */
class PartListElement extends Shape
{
    /**
     * @param array{
     *     RangeInBytes?: string,
     *     SHA256TreeHash?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
