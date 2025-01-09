<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Dimension> $Dimensions
 * @property list<SourceSegment> $SourceSegments
 * @property 'ALL'|'ANY'|'NONE' $SourceType
 * @property 'ALL'|'ANY'|'NONE' $Type
 */
class Group extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<Dimension>,
     *     SourceSegments?: list<SourceSegment>,
     *     SourceType?: 'ALL'|'ANY'|'NONE',
     *     Type?: 'ALL'|'ANY'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
