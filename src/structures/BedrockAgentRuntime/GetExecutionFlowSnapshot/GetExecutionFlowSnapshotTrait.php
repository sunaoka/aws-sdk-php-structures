<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetExecutionFlowSnapshot;

trait GetExecutionFlowSnapshotTrait
{
    /**
     * @param GetExecutionFlowSnapshotRequest $args
     * @return GetExecutionFlowSnapshotResponse
     */
    public function getExecutionFlowSnapshot(GetExecutionFlowSnapshotRequest $args)
    {
        $result = parent::getExecutionFlowSnapshot($args->toArray());
        return new GetExecutionFlowSnapshotResponse($result->toArray());
    }
}
