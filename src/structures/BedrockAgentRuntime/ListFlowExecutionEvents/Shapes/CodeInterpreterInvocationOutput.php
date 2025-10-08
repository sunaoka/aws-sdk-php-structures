<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $executionOutput
 * @property string|null $executionError
 * @property list<string>|null $files
 * @property bool|null $executionTimeout
 * @property Metadata|null $metadata
 */
class CodeInterpreterInvocationOutput extends Shape
{
    /**
     * @param array{
     *     executionOutput?: string|null,
     *     executionError?: string|null,
     *     files?: list<string>|null,
     *     executionTimeout?: bool|null,
     *     metadata?: Metadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
