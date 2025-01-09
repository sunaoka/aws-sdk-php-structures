<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\StartPipelineReprocessing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $s3Paths
 */
class ChannelMessages extends Shape
{
    /**
     * @param array{s3Paths?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
