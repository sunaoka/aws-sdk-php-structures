<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveFlowMediaStream;

trait RemoveFlowMediaStreamTrait
{
    /**
     * @param RemoveFlowMediaStreamRequest $args
     * @return RemoveFlowMediaStreamResponse
     */
    public function removeFlowMediaStream(RemoveFlowMediaStreamRequest $args)
    {
        $result = parent::removeFlowMediaStream($args->toArray());
        return new RemoveFlowMediaStreamResponse($result->toArray());
    }
}
