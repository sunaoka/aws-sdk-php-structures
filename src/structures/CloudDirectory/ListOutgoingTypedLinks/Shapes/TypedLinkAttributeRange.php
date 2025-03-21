<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListOutgoingTypedLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property TypedAttributeValueRange $Range
 */
class TypedLinkAttributeRange extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     Range: TypedAttributeValueRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
