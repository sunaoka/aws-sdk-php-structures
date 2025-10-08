<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message>|null $messages
 * @property list<SystemContentBlock>|null $system
 */
class ConverseTokensRequest extends Shape
{
    /**
     * @param array{
     *     messages?: list<Message>|null,
     *     system?: list<SystemContentBlock>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
