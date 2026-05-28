<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Conversational|null $conversational
 * @property MemoryDocument|null $blob
 */
class PayloadType extends Shape
{
    /**
     * @param array{
     *     conversational?: Conversational|null,
     *     blob?: MemoryDocument|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
