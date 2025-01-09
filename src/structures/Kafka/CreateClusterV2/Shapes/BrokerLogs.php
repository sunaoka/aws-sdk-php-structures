<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogs $CloudWatchLogs
 * @property Firehose $Firehose
 * @property S3 $S3
 */
class BrokerLogs extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogs?: CloudWatchLogs,
     *     Firehose?: Firehose,
     *     S3?: S3
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
