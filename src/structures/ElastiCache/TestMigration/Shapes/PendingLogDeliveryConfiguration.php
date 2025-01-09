<?php

namespace Sunaoka\Aws\Structures\ElastiCache\TestMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'slow-log'|'engine-log' $LogType
 * @property 'cloudwatch-logs'|'kinesis-firehose' $DestinationType
 * @property DestinationDetails $DestinationDetails
 * @property 'text'|'json' $LogFormat
 */
class PendingLogDeliveryConfiguration extends Shape
{
    /**
     * @param array{
     *     LogType?: 'slow-log'|'engine-log',
     *     DestinationType?: 'cloudwatch-logs'|'kinesis-firehose',
     *     DestinationDetails?: DestinationDetails,
     *     LogFormat?: 'text'|'json'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
