<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SegmentDefinitionName
 */
class SourceSegment extends Shape
{
    /**
     * @param array{SegmentDefinitionName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
