<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePromptVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentIdentifier
 */
class PromptAgentResource extends Shape
{
    /**
     * @param array{agentIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
