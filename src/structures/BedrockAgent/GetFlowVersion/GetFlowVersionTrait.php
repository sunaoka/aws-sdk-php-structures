<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion;

trait GetFlowVersionTrait
{
    /**
     * @param GetFlowVersionRequest $args
     * @return GetFlowVersionResponse
     */
    public function getFlowVersion(GetFlowVersionRequest $args)
    {
        $result = parent::getFlowVersion($args->toArray());
        return new GetFlowVersionResponse($result->toArray());
    }
}
