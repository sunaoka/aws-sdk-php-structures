<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIPrompt;

trait CreateAIPromptTrait
{
    /**
     * @param CreateAIPromptRequest $args
     * @return CreateAIPromptResponse
     */
    public function createAIPrompt(CreateAIPromptRequest $args)
    {
        $result = parent::createAIPrompt($args->toArray());
        return new CreateAIPromptResponse($result->toArray());
    }
}
