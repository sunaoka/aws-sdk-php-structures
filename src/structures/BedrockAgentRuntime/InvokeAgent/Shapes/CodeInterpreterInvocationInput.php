<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property list<string> $files
 */
class CodeInterpreterInvocationInput extends Shape
{
    /**
     * @param array{
     *     code?: string,
     *     files?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
