<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\OptimizePrompt;

trait OptimizePromptTrait
{
    /**
     * @param OptimizePromptRequest $args
     * @return OptimizePromptResponse
     */
    public function optimizePrompt(OptimizePromptRequest $args)
    {
        $result = parent::optimizePrompt($args->toArray());
        return new OptimizePromptResponse($result->toArray());
    }
}
