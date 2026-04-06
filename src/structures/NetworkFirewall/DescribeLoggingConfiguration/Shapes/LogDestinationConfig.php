<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALERT'|'FLOW' $LogType
 * @property 'S3'|'CloudWatchLogs'|'KinesisDataFirehose' $LogDestinationType
 * @property array<string, string> $LogDestination
 */
class LogDestinationConfig extends Shape
{
    /**
     * @param array{
     *     LogType: 'ALERT'|'FLOW',
     *     LogDestinationType: 'S3'|'CloudWatchLogs'|'KinesisDataFirehose',
     *     LogDestination: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
