<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateNodeState;

trait UpdateNodeStateTrait
{
    /**
     * @param UpdateNodeStateRequest $args
     * @return UpdateNodeStateResponse
     */
    public function updateNodeState(UpdateNodeStateRequest $args)
    {
        $result = parent::updateNodeState($args->toArray());
        return new UpdateNodeStateResponse($result->toArray());
    }
}
