<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3LogDestinationParameters|null $S3LogDestination
 * @property FirehoseLogDestinationParameters|null $FirehoseLogDestination
 * @property CloudwatchLogsLogDestinationParameters|null $CloudwatchLogsLogDestination
 * @property 'OFF'|'ERROR'|'INFO'|'TRACE' $Level
 * @property list<'ALL'>|null $IncludeExecutionData
 */
class PipeLogConfigurationParameters extends Shape
{
    /**
     * @param array{
     *     S3LogDestination?: S3LogDestinationParameters|null,
     *     FirehoseLogDestination?: FirehoseLogDestinationParameters|null,
     *     CloudwatchLogsLogDestination?: CloudwatchLogsLogDestinationParameters|null,
     *     Level: 'OFF'|'ERROR'|'INFO'|'TRACE',
     *     IncludeExecutionData?: list<'ALL'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
