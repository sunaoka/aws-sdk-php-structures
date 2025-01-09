<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SegmentResponse> $Item
 * @property string $NextToken
 */
class SegmentsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<SegmentResponse>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
