<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConversationMessage> $conversation
 * @property string $problemStatement
 */
class PredictQAppInputOptions extends Shape
{
    /**
     * @param array{
     *     conversation?: list<ConversationMessage>,
     *     problemStatement?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
