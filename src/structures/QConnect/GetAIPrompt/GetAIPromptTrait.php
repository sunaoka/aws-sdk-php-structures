<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIPrompt;

trait GetAIPromptTrait
{
    /**
     * @param GetAIPromptRequest $args
     * @return GetAIPromptResponse
     */
    public function getAIPrompt(GetAIPromptRequest $args)
    {
        $result = parent::getAIPrompt($args->toArray());
        return new GetAIPromptResponse($result->toArray());
    }
}
