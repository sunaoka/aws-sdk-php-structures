<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LastRecorderStatus $LastRecorderStatus
 * @property LastUploaderStatus $LastUploaderStatus
 */
class EdgeAgentStatus extends Shape
{
    /**
     * @param array{
     *     LastRecorderStatus?: LastRecorderStatus,
     *     LastUploaderStatus?: LastUploaderStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
