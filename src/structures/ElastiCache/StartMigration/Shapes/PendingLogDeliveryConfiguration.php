<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StartMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'slow-log'|'engine-log'|null $LogType
 * @property 'cloudwatch-logs'|'kinesis-firehose'|null $DestinationType
 * @property DestinationDetails|null $DestinationDetails
 * @property 'text'|'json'|null $LogFormat
 */
class PendingLogDeliveryConfiguration extends Shape
{
    /**
     * @param array{
     *     LogType?: 'slow-log'|'engine-log'|null,
     *     DestinationType?: 'cloudwatch-logs'|'kinesis-firehose'|null,
     *     DestinationDetails?: DestinationDetails|null,
     *     LogFormat?: 'text'|'json'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
