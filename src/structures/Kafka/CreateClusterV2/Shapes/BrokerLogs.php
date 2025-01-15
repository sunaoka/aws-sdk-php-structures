<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogs|null $CloudWatchLogs
 * @property Firehose|null $Firehose
 * @property S3|null $S3
 */
class BrokerLogs extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogs?: CloudWatchLogs|null,
     *     Firehose?: Firehose|null,
     *     S3?: S3|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
