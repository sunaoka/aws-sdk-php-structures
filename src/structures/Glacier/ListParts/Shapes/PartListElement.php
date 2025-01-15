<?php

namespace Sunaoka\Aws\Structures\Glacier\ListParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RangeInBytes
 * @property string|null $SHA256TreeHash
 */
class PartListElement extends Shape
{
    /**
     * @param array{
     *     RangeInBytes?: string|null,
     *     SHA256TreeHash?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
