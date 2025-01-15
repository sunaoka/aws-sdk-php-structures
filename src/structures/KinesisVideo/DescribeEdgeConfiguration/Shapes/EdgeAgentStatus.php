<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LastRecorderStatus|null $LastRecorderStatus
 * @property LastUploaderStatus|null $LastUploaderStatus
 */
class EdgeAgentStatus extends Shape
{
    /**
     * @param array{
     *     LastRecorderStatus?: LastRecorderStatus|null,
     *     LastUploaderStatus?: LastUploaderStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
