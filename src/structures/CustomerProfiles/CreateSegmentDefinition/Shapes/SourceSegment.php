<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SegmentDefinitionName
 */
class SourceSegment extends Shape
{
    /**
     * @param array{SegmentDefinitionName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
