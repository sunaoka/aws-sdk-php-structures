<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StartMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsDestinationDetails|null $CloudWatchLogsDetails
 * @property KinesisFirehoseDestinationDetails|null $KinesisFirehoseDetails
 */
class DestinationDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsDetails?: CloudWatchLogsDestinationDetails|null,
     *     KinesisFirehoseDetails?: KinesisFirehoseDestinationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
