<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ValueString
 * @property array<string, SegmentAttributeValue> $ValueMap
 * @property int $ValueInteger
 */
class SegmentAttributeValue extends Shape
{
    /**
     * @param array{
     *     ValueString?: string,
     *     ValueMap?: array<string, SegmentAttributeValue>,
     *     ValueInteger?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
