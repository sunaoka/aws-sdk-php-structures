<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteFlowVersion;

trait DeleteFlowVersionTrait
{
    /**
     * @param DeleteFlowVersionRequest $args
     * @return DeleteFlowVersionResponse
     */
    public function deleteFlowVersion(DeleteFlowVersionRequest $args)
    {
        $result = parent::deleteFlowVersion($args->toArray());
        return new DeleteFlowVersionResponse($result->toArray());
    }
}
