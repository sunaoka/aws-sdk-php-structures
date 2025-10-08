<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeletePrompt;

trait DeletePromptTrait
{
    /**
     * @param DeletePromptRequest $args
     * @return DeletePromptResponse
     */
    public function deletePrompt(DeletePromptRequest $args)
    {
        $result = parent::deletePrompt($args->toArray());
        return new DeletePromptResponse($result->toArray());
    }
}
