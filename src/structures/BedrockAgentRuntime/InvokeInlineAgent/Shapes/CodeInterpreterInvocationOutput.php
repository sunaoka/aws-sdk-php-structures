<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $executionError
 * @property string|null $executionOutput
 * @property bool|null $executionTimeout
 * @property list<string>|null $files
 */
class CodeInterpreterInvocationOutput extends Shape
{
    /**
     * @param array{
     *     executionError?: string|null,
     *     executionOutput?: string|null,
     *     executionTimeout?: bool|null,
     *     files?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
