<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Message $message
 * @property list<Message> $variations
 */
class MessageGroup extends Shape
{
    /**
     * @param array{
     *     message: Message,
     *     variations?: list<Message>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
