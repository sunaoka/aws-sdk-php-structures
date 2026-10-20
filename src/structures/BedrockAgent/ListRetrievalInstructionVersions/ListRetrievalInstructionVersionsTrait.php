<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListRetrievalInstructionVersions;

trait ListRetrievalInstructionVersionsTrait
{
    /**
     * @param ListRetrievalInstructionVersionsRequest $args
     * @return ListRetrievalInstructionVersionsResponse
     */
    public function listRetrievalInstructionVersions(ListRetrievalInstructionVersionsRequest $args)
    {
        $result = parent::listRetrievalInstructionVersions($args->toArray());
        return new ListRetrievalInstructionVersionsResponse($result->toArray());
    }
}
