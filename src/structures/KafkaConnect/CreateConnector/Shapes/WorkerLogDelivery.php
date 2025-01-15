<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsLogDelivery|null $cloudWatchLogs
 * @property FirehoseLogDelivery|null $firehose
 * @property S3LogDelivery|null $s3
 */
class WorkerLogDelivery extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogs?: CloudWatchLogsLogDelivery|null,
     *     firehose?: FirehoseLogDelivery|null,
     *     s3?: S3LogDelivery|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
