<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowMediaStream;

trait UpdateFlowMediaStreamTrait
{
    /**
     * @param UpdateFlowMediaStreamRequest $args
     * @return UpdateFlowMediaStreamResponse
     */
    public function updateFlowMediaStream(UpdateFlowMediaStreamRequest $args)
    {
        $result = parent::updateFlowMediaStream($args->toArray());
        return new UpdateFlowMediaStreamResponse($result->toArray());
    }
}
