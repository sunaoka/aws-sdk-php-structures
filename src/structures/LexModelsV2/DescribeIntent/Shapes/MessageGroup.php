<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Message $message
 * @property list<Message>|null $variations
 */
class MessageGroup extends Shape
{
    /**
     * @param array{
     *     message: Message,
     *     variations?: list<Message>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
