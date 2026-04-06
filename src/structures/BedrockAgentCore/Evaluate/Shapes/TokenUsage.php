<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\Evaluate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $inputTokens
 * @property int|null $outputTokens
 * @property int|null $totalTokens
 */
class TokenUsage extends Shape
{
    /**
     * @param array{
     *     inputTokens?: int|null,
     *     outputTokens?: int|null,
     *     totalTokens?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
