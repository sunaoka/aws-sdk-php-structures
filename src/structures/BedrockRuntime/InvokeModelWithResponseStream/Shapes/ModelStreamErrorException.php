<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property int<100, 599>|null $originalStatusCode
 * @property string|null $originalMessage
 */
class ModelStreamErrorException extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     originalStatusCode?: int<100, 599>|null,
     *     originalMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
