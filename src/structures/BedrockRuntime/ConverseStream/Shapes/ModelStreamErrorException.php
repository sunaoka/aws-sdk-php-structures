<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property int $originalStatusCode
 * @property string $originalMessage
 */
class ModelStreamErrorException extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     originalStatusCode?: int,
     *     originalMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
