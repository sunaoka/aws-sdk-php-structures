<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIPromptVersion;

trait CreateAIPromptVersionTrait
{
    /**
     * @param CreateAIPromptVersionRequest $args
     * @return CreateAIPromptVersionResponse
     */
    public function createAIPromptVersion(CreateAIPromptVersionRequest $args)
    {
        $result = parent::createAIPromptVersion($args->toArray());
        return new CreateAIPromptVersionResponse($result->toArray());
    }
}
