<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsLogDeliveryDescription|null $cloudWatchLogs
 * @property FirehoseLogDeliveryDescription|null $firehose
 * @property S3LogDeliveryDescription|null $s3
 */
class WorkerLogDeliveryDescription extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsLogDeliveryDescription|null,
     *     firehose?: FirehoseLogDeliveryDescription|null,
     *     s3?: S3LogDeliveryDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
