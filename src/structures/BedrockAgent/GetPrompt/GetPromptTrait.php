<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetPrompt;

trait GetPromptTrait
{
    /**
     * @param GetPromptRequest $args
     * @return GetPromptResponse
     */
    public function getPrompt(GetPromptRequest $args)
    {
        $result = parent::getPrompt($args->toArray());
        return new GetPromptResponse($result->toArray());
    }
}
