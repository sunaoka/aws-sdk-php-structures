<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property list<string>|null $files
 */
class CodeInterpreterInvocationInput extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     files?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
