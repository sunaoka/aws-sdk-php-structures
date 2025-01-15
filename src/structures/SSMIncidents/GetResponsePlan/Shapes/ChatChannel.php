<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $chatbotSns
 * @property EmptyChatChannel|null $empty
 */
class ChatChannel extends Shape
{
    /**
     * @param array{
     *     chatbotSns?: list<string>|null,
     *     empty?: EmptyChatChannel|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
