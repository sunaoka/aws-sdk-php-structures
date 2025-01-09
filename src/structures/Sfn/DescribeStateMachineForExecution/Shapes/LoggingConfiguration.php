<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineForExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'ERROR'|'FATAL'|'OFF' $level
 * @property bool $includeExecutionData
 * @property list<LogDestination> $destinations
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     level?: 'ALL'|'ERROR'|'FATAL'|'OFF',
     *     includeExecutionData?: bool,
     *     destinations?: list<LogDestination>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
