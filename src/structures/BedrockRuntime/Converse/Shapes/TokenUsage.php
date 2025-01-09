<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $inputTokens
 * @property int $outputTokens
 * @property int $totalTokens
 */
class TokenUsage extends Shape
{
    /**
     * @param array{
     *     inputTokens: int,
     *     outputTokens: int,
     *     totalTokens: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
