<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentVersion;

trait GetAgentVersionTrait
{
    /**
     * @param GetAgentVersionRequest $args
     * @return GetAgentVersionResponse
     */
    public function getAgentVersion(GetAgentVersionRequest $args)
    {
        $result = parent::getAgentVersion($args->toArray());
        return new GetAgentVersionResponse($result->toArray());
    }
}
