<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePromptVersion;

trait CreatePromptVersionTrait
{
    /**
     * @param CreatePromptVersionRequest $args
     * @return CreatePromptVersionResponse
     */
    public function createPromptVersion(CreatePromptVersionRequest $args)
    {
        $result = parent::createPromptVersion($args->toArray());
        return new CreatePromptVersionResponse($result->toArray());
    }
}
