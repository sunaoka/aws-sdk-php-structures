<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SegmentResponse> $Item
 * @property string|null $NextToken
 */
class SegmentsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<SegmentResponse>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
