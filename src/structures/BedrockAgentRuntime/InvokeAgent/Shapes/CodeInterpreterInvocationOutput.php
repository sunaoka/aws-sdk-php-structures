<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionError
 * @property string $executionOutput
 * @property bool $executionTimeout
 * @property list<string> $files
 */
class CodeInterpreterInvocationOutput extends Shape
{
    /**
     * @param array{
     *     executionError?: string,
     *     executionOutput?: string,
     *     executionTimeout?: bool,
     *     files?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
