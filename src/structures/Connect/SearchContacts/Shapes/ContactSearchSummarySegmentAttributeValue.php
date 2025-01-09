<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ValueString
 */
class ContactSearchSummarySegmentAttributeValue extends Shape
{
    /**
     * @param array{ValueString?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
