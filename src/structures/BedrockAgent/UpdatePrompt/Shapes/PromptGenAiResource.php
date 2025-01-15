<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptAgentResource|null $agent
 */
class PromptGenAiResource extends Shape
{
    /**
     * @param array{agent?: PromptAgentResource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
