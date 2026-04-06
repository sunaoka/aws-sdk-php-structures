<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion;

trait CreateFlowVersionTrait
{
    /**
     * @param CreateFlowVersionRequest $args
     * @return CreateFlowVersionResponse
     */
    public function createFlowVersion(CreateFlowVersionRequest $args)
    {
        $result = parent::createFlowVersion($args->toArray());
        return new CreateFlowVersionResponse($result->toArray());
    }
}
