<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsLogDelivery $cloudWatchLogs
 * @property FirehoseLogDelivery $firehose
 * @property S3LogDelivery $s3
 */
class WorkerLogDelivery extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsLogDelivery,
     *     firehose?: FirehoseLogDelivery,
     *     s3?: S3LogDelivery
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
