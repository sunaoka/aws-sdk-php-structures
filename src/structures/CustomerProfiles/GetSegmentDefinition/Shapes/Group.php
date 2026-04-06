<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Dimension>|null $Dimensions
 * @property list<SourceSegment>|null $SourceSegments
 * @property 'ALL'|'ANY'|'NONE'|null $SourceType
 * @property 'ALL'|'ANY'|'NONE'|null $Type
 */
class Group extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<Dimension>|null,
     *     SourceSegments?: list<SourceSegment>|null,
     *     SourceType?: 'ALL'|'ANY'|'NONE'|null,
     *     Type?: 'ALL'|'ANY'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
