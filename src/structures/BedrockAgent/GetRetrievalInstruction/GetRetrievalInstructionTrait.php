<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetRetrievalInstruction;

trait GetRetrievalInstructionTrait
{
    /**
     * @param GetRetrievalInstructionRequest $args
     * @return GetRetrievalInstructionResponse
     */
    public function getRetrievalInstruction(GetRetrievalInstructionRequest $args)
    {
        $result = parent::getRetrievalInstruction($args->toArray());
        return new GetRetrievalInstructionResponse($result->toArray());
    }
}
