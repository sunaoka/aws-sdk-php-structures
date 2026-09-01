<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogs $CloudWatchLogs
 */
class ChannelLoggingConfiguration extends Shape
{
    /**
     * @param array{CloudWatchLogs: CloudWatchLogs} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
