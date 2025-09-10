<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ValueString
 * @property array<string, SegmentAttributeValue>|null $ValueMap
 * @property int|null $ValueInteger
 * @property list<SegmentAttributeValue>|null $ValueList
 * @property string|null $ValueArn
 */
class SegmentAttributeValue extends Shape
{
    /**
     * @param array{
     *     ValueString?: string|null,
     *     ValueMap?: array<string, SegmentAttributeValue>|null,
     *     ValueInteger?: int|null,
     *     ValueList?: list<SegmentAttributeValue>|null,
     *     ValueArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
