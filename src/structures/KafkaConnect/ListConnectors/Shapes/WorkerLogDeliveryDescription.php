<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsLogDeliveryDescription $cloudWatchLogs
 * @property FirehoseLogDeliveryDescription $firehose
 * @property S3LogDeliveryDescription $s3
 */
class WorkerLogDeliveryDescription extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsLogDeliveryDescription,
     *     firehose?: FirehoseLogDeliveryDescription,
     *     s3?: S3LogDeliveryDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
