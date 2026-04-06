<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentVersion;

trait DeleteAgentVersionTrait
{
    /**
     * @param DeleteAgentVersionRequest $args
     * @return DeleteAgentVersionResponse
     */
    public function deleteAgentVersion(DeleteAgentVersionRequest $args)
    {
        $result = parent::deleteAgentVersion($args->toArray());
        return new DeleteAgentVersionResponse($result->toArray());
    }
}
