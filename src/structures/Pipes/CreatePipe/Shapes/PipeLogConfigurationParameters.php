<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3LogDestinationParameters $S3LogDestination
 * @property FirehoseLogDestinationParameters $FirehoseLogDestination
 * @property CloudwatchLogsLogDestinationParameters $CloudwatchLogsLogDestination
 * @property 'OFF'|'ERROR'|'INFO'|'TRACE' $Level
 * @property list<'ALL'> $IncludeExecutionData
 */
class PipeLogConfigurationParameters extends Shape
{
    /**
     * @param array{
     *     S3LogDestination?: S3LogDestinationParameters,
     *     FirehoseLogDestination?: FirehoseLogDestinationParameters,
     *     CloudwatchLogsLogDestination?: CloudwatchLogsLogDestinationParameters,
     *     Level: 'OFF'|'ERROR'|'INFO'|'TRACE',
     *     IncludeExecutionData?: list<'ALL'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
