<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteAIAgentVersion;

trait DeleteAIAgentVersionTrait
{
    /**
     * @param DeleteAIAgentVersionRequest $args
     * @return DeleteAIAgentVersionResponse
     */
    public function deleteAIAgentVersion(DeleteAIAgentVersionRequest $args)
    {
        $result = parent::deleteAIAgentVersion($args->toArray());
        return new DeleteAIAgentVersionResponse($result->toArray());
    }
}
