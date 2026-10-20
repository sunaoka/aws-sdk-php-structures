<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateRetrievalInstruction;

trait CreateRetrievalInstructionTrait
{
    /**
     * @param CreateRetrievalInstructionRequest $args
     * @return CreateRetrievalInstructionResponse
     */
    public function createRetrievalInstruction(CreateRetrievalInstructionRequest $args)
    {
        $result = parent::createRetrievalInstruction($args->toArray());
        return new CreateRetrievalInstructionResponse($result->toArray());
    }
}
