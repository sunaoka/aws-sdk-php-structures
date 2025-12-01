<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetInvocationStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageBlock|null $image
 * @property string|null $text
 */
class BedrockSessionContentBlock extends Shape
{
    /**
     * @param array{
     *     image?: ImageBlock|null,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
