<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $inputTokens
 * @property int|null $outputTokens
 */
class Usage extends Shape
{
    /**
     * @param array{
     *     inputTokens?: int|null,
     *     outputTokens?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
