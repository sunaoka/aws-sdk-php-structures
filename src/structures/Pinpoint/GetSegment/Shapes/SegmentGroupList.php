<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SegmentGroup>|null $Groups
 * @property 'ALL'|'ANY'|'NONE'|null $Include
 */
class SegmentGroupList extends Shape
{
    /**
     * @param array{
     *     Groups?: list<SegmentGroup>|null,
     *     Include?: 'ALL'|'ANY'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
