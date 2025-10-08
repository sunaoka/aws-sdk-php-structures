<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePrompt;

trait UpdatePromptTrait
{
    /**
     * @param UpdatePromptRequest $args
     * @return UpdatePromptResponse
     */
    public function updatePrompt(UpdatePromptRequest $args)
    {
        $result = parent::updatePrompt($args->toArray());
        return new UpdatePromptResponse($result->toArray());
    }
}
