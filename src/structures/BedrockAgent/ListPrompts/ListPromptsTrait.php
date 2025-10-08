<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListPrompts;

trait ListPromptsTrait
{
    /**
     * @param ListPromptsRequest $args
     * @return ListPromptsResponse
     */
    public function listPrompts(ListPromptsRequest $args)
    {
        $result = parent::listPrompts($args->toArray());
        return new ListPromptsResponse($result->toArray());
    }
}
