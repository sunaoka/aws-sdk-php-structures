<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateRetrievalInstruction;

trait UpdateRetrievalInstructionTrait
{
    /**
     * @param UpdateRetrievalInstructionRequest $args
     * @return UpdateRetrievalInstructionResponse
     */
    public function updateRetrievalInstruction(UpdateRetrievalInstructionRequest $args)
    {
        $result = parent::updateRetrievalInstruction($args->toArray());
        return new UpdateRetrievalInstructionResponse($result->toArray());
    }
}
