<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteRetrievalInstruction;

trait DeleteRetrievalInstructionTrait
{
    /**
     * @param DeleteRetrievalInstructionRequest $args
     * @return DeleteRetrievalInstructionResponse
     */
    public function deleteRetrievalInstruction(DeleteRetrievalInstructionRequest $args)
    {
        $result = parent::deleteRetrievalInstruction($args->toArray());
        return new DeleteRetrievalInstructionResponse($result->toArray());
    }
}
