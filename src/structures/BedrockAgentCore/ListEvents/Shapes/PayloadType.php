<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Conversational|null $conversational
 * @property Document|null $blob
 */
class PayloadType extends Shape
{
    /**
     * @param array{
     *     conversational?: Conversational|null,
     *     blob?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
