<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3LogDestination|null $S3LogDestination
 * @property FirehoseLogDestination|null $FirehoseLogDestination
 * @property CloudwatchLogsLogDestination|null $CloudwatchLogsLogDestination
 * @property 'OFF'|'ERROR'|'INFO'|'TRACE'|null $Level
 * @property list<'ALL'>|null $IncludeExecutionData
 */
class PipeLogConfiguration extends Shape
{
    /**
     * @param array{
     *     S3LogDestination?: S3LogDestination|null,
     *     FirehoseLogDestination?: FirehoseLogDestination|null,
     *     CloudwatchLogsLogDestination?: CloudwatchLogsLogDestination|null,
     *     Level?: 'OFF'|'ERROR'|'INFO'|'TRACE'|null,
     *     IncludeExecutionData?: list<'ALL'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
