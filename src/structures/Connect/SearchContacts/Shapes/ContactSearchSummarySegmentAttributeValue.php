<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ValueString
 * @property array<string, SegmentAttributeValue>|null $ValueMap
 */
class ContactSearchSummarySegmentAttributeValue extends Shape
{
    /**
     * @param array{
     *     ValueString?: string|null,
     *     ValueMap?: array<string, SegmentAttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
