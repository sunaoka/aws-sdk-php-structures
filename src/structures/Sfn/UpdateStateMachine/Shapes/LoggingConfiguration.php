<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'ERROR'|'FATAL'|'OFF'|null $level
 * @property bool|null $includeExecutionData
 * @property list<LogDestination>|null $destinations
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     level?: 'ALL'|'ERROR'|'FATAL'|'OFF'|null,
     *     includeExecutionData?: bool|null,
     *     destinations?: list<LogDestination>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
