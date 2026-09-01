<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsUpdateInput $CloudWatchLogs
 */
class ChannelLoggingUpdateInput extends Shape
{
    /**
     * @param array{CloudWatchLogs: CloudWatchLogsUpdateInput} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
