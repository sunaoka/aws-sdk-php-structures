<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateRetrievalInstructionVersion;

trait CreateRetrievalInstructionVersionTrait
{
    /**
     * @param CreateRetrievalInstructionVersionRequest $args
     * @return CreateRetrievalInstructionVersionResponse
     */
    public function createRetrievalInstructionVersion(CreateRetrievalInstructionVersionRequest $args)
    {
        $result = parent::createRetrievalInstructionVersion($args->toArray());
        return new CreateRetrievalInstructionVersionResponse($result->toArray());
    }
}
