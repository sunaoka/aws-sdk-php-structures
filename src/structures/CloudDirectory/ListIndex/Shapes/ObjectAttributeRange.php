<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeKey $AttributeKey
 * @property TypedAttributeValueRange $Range
 */
class ObjectAttributeRange extends Shape
{
    /**
     * @param array{
     *     AttributeKey?: AttributeKey,
     *     Range?: TypedAttributeValueRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
