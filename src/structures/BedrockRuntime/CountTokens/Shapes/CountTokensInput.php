<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvokeModelTokensRequest|null $invokeModel
 * @property ConverseTokensRequest|null $converse
 */
class CountTokensInput extends Shape
{
    /**
     * @param array{
     *     invokeModel?: InvokeModelTokensRequest|null,
     *     converse?: ConverseTokensRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
