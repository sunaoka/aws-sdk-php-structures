<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CancelReplay;

trait CancelReplayTrait
{
    /**
     * @param CancelReplayRequest $args
     * @return CancelReplayResponse
     */
    public function cancelReplay(CancelReplayRequest $args)
    {
        $result = parent::cancelReplay($args->toArray());
        return new CancelReplayResponse($result->toArray());
    }
}
