<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NdiMediaStreamInfo> $Streams
 */
class NdiMediaInfo extends Shape
{
    /**
     * @param array{Streams: list<NdiMediaStreamInfo>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
