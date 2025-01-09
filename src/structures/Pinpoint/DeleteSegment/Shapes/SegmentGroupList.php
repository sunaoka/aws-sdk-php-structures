<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SegmentGroup> $Groups
 * @property 'ALL'|'ANY'|'NONE' $Include
 */
class SegmentGroupList extends Shape
{
    /**
     * @param array{
     *     Groups?: list<SegmentGroup>,
     *     Include?: 'ALL'|'ANY'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
