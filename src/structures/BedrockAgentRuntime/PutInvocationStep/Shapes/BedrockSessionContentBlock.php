<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\PutInvocationStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property ImageBlock|null $image
 */
class BedrockSessionContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     image?: ImageBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
