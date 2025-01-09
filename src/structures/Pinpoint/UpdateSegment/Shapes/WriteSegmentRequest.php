<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SegmentDimensions $Dimensions
 * @property string $Name
 * @property SegmentGroupList $SegmentGroups
 * @property array<string, string> $tags
 */
class WriteSegmentRequest extends Shape
{
    /**
     * @param array{
     *     Dimensions?: SegmentDimensions,
     *     Name?: string,
     *     SegmentGroups?: SegmentGroupList,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
