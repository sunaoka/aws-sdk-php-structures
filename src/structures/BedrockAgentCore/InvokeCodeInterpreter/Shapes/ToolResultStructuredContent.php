<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property 'submitted'|'working'|'completed'|'canceled'|'failed'|null $taskStatus
 * @property string|null $stdout
 * @property string|null $stderr
 * @property int|null $exitCode
 * @property double|null $executionTime
 */
class ToolResultStructuredContent extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     taskStatus?: 'submitted'|'working'|'completed'|'canceled'|'failed'|null,
     *     stdout?: string|null,
     *     stderr?: string|null,
     *     exitCode?: int|null,
     *     executionTime?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
