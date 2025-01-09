<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SegmentDimensions> $Dimensions
 * @property list<SegmentReference> $SourceSegments
 * @property 'ALL'|'ANY'|'NONE' $SourceType
 * @property 'ALL'|'ANY'|'NONE' $Type
 */
class SegmentGroup extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<SegmentDimensions>,
     *     SourceSegments?: list<SegmentReference>,
     *     SourceType?: 'ALL'|'ANY'|'NONE',
     *     Type?: 'ALL'|'ANY'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
