<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $chatbotSns
 * @property EmptyChatChannel $empty
 */
class ChatChannel extends Shape
{
    /**
     * @param array{
     *     chatbotSns?: list<string>,
     *     empty?: EmptyChatChannel
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
