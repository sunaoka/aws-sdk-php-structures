<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIPrompt;

trait DeleteAIPromptTrait
{
    /**
     * @param DeleteAIPromptRequest $args
     * @return DeleteAIPromptResponse
     */
    public function deleteAIPrompt(DeleteAIPromptRequest $args)
    {
        $result = parent::deleteAIPrompt($args->toArray());
        return new DeleteAIPromptResponse($result->toArray());
    }
}
