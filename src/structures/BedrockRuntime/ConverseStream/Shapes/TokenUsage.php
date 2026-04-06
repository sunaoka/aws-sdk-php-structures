<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $inputTokens
 * @property int<0, max> $outputTokens
 * @property int<0, max> $totalTokens
 */
class TokenUsage extends Shape
{
    /**
     * @param array{
     *     inputTokens: int<0, max>,
     *     outputTokens: int<0, max>,
     *     totalTokens: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
