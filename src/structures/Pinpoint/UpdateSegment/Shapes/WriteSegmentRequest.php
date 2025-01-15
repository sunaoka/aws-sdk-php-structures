<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SegmentDimensions|null $Dimensions
 * @property string|null $Name
 * @property SegmentGroupList|null $SegmentGroups
 * @property array<string, string>|null $tags
 */
class WriteSegmentRequest extends Shape
{
    /**
     * @param array{
     *     Dimensions?: SegmentDimensions|null,
     *     Name?: string|null,
     *     SegmentGroups?: SegmentGroupList|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
