<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConversationMessage>|null $conversation
 * @property string|null $problemStatement
 */
class PredictQAppInputOptions extends Shape
{
    /**
     * @param array{
     *     conversation?: list<ConversationMessage>|null,
     *     problemStatement?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
