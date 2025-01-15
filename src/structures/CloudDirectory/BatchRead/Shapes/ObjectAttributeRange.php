<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeKey|null $AttributeKey
 * @property TypedAttributeValueRange|null $Range
 */
class ObjectAttributeRange extends Shape
{
    /**
     * @param array{
     *     AttributeKey?: AttributeKey|null,
     *     Range?: TypedAttributeValueRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
