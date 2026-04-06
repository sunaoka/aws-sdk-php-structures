<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion;

trait CreateAIAgentVersionTrait
{
    /**
     * @param CreateAIAgentVersionRequest $args
     * @return CreateAIAgentVersionResponse
     */
    public function createAIAgentVersion(CreateAIAgentVersionRequest $args)
    {
        $result = parent::createAIAgentVersion($args->toArray());
        return new CreateAIAgentVersionResponse($result->toArray());
    }
}
