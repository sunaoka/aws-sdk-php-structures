<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIPromptVersion;

trait DeleteAIPromptVersionTrait
{
    /**
     * @param DeleteAIPromptVersionRequest $args
     * @return DeleteAIPromptVersionResponse
     */
    public function deleteAIPromptVersion(DeleteAIPromptVersionRequest $args)
    {
        $result = parent::deleteAIPromptVersion($args->toArray());
        return new DeleteAIPromptVersionResponse($result->toArray());
    }
}
