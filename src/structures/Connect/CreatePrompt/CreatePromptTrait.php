<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePrompt;

trait CreatePromptTrait
{
    /**
     * @param CreatePromptRequest $args
     * @return CreatePromptResponse
     */
    public function createPrompt(CreatePromptRequest $args)
    {
        $result = parent::createPrompt($args->toArray());
        return new CreatePromptResponse($result->toArray());
    }
}
