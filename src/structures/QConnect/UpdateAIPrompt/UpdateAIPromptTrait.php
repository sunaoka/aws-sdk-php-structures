<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIPrompt;

trait UpdateAIPromptTrait
{
    /**
     * @param UpdateAIPromptRequest $args
     * @return UpdateAIPromptResponse
     */
    public function updateAIPrompt(UpdateAIPromptRequest $args)
    {
        $result = parent::updateAIPrompt($args->toArray());
        return new UpdateAIPromptResponse($result->toArray());
    }
}
