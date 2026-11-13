<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RtmpMediaStreamInfo> $Streams
 */
class RtmpMediaInfo extends Shape
{
    /**
     * @param array{Streams: list<RtmpMediaStreamInfo>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
