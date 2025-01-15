<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ValueString
 * @property array<string, SegmentAttributeValue>|null $ValueMap
 * @property int|null $ValueInteger
 */
class SegmentAttributeValue extends Shape
{
    /**
     * @param array{
     *     ValueString?: string|null,
     *     ValueMap?: array<string, SegmentAttributeValue>|null,
     *     ValueInteger?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
