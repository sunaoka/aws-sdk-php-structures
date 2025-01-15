<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SegmentDimensions>|null $Dimensions
 * @property list<SegmentReference>|null $SourceSegments
 * @property 'ALL'|'ANY'|'NONE'|null $SourceType
 * @property 'ALL'|'ANY'|'NONE'|null $Type
 */
class SegmentGroup extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<SegmentDimensions>|null,
     *     SourceSegments?: list<SegmentReference>|null,
     *     SourceType?: 'ALL'|'ANY'|'NONE'|null,
     *     Type?: 'ALL'|'ANY'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
