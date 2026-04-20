<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReplicatorCloudWatchLogs|null $CloudWatchLogs
 * @property ReplicatorFirehose|null $Firehose
 * @property ReplicatorS3|null $S3
 */
class ReplicatorLogDelivery extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogs?: ReplicatorCloudWatchLogs|null,
     *     Firehose?: ReplicatorFirehose|null,
     *     S3?: ReplicatorS3|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
