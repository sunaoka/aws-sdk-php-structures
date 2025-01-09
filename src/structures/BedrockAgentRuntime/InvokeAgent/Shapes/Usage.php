<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $inputTokens
 * @property int $outputTokens
 */
class Usage extends Shape
{
    /**
     * @param array{
     *     inputTokens?: int,
     *     outputTokens?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
