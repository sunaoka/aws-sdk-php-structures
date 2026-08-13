<?php

namespace Sunaoka\Aws\Structures\Connect\StartAssistantContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AiAgentId
 */
class AiAgentInput extends Shape
{
    /**
     * @param array{AiAgentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
