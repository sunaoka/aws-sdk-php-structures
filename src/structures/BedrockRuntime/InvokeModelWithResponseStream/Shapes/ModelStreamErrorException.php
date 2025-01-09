<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property int<100, 599> $originalStatusCode
 * @property string $originalMessage
 */
class ModelStreamErrorException extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     originalStatusCode?: int<100, 599>,
     *     originalMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
