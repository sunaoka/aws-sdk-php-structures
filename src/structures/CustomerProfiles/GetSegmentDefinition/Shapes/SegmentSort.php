<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SortAttribute> $Attributes
 */
class SegmentSort extends Shape
{
    /**
     * @param array{Attributes: list<SortAttribute>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
