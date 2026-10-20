<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListRetrievalInstructions;

trait ListRetrievalInstructionsTrait
{
    /**
     * @param ListRetrievalInstructionsRequest $args
     * @return ListRetrievalInstructionsResponse
     */
    public function listRetrievalInstructions(ListRetrievalInstructionsRequest $args)
    {
        $result = parent::listRetrievalInstructions($args->toArray());
        return new ListRetrievalInstructionsResponse($result->toArray());
    }
}
