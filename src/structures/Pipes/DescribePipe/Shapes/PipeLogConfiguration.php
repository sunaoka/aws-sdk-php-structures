<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3LogDestination $S3LogDestination
 * @property FirehoseLogDestination $FirehoseLogDestination
 * @property CloudwatchLogsLogDestination $CloudwatchLogsLogDestination
 * @property 'OFF'|'ERROR'|'INFO'|'TRACE' $Level
 * @property list<'ALL'> $IncludeExecutionData
 */
class PipeLogConfiguration extends Shape
{
    /**
     * @param array{
     *     S3LogDestination?: S3LogDestination,
     *     FirehoseLogDestination?: FirehoseLogDestination,
     *     CloudwatchLogsLogDestination?: CloudwatchLogsLogDestination,
     *     Level?: 'OFF'|'ERROR'|'INFO'|'TRACE',
     *     IncludeExecutionData?: list<'ALL'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
