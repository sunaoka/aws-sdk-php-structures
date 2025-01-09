<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromptAgentResource $agent
 */
class PromptGenAiResource extends Shape
{
    /**
     * @param array{agent?: PromptAgentResource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
