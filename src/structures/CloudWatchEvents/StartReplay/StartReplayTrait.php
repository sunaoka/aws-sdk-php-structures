<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\StartReplay;

trait StartReplayTrait
{
    /**
     * @param StartReplayRequest $args
     * @return StartReplayResponse
     */
    public function startReplay(StartReplayRequest $args)
    {
        $result = parent::startReplay($args->toArray());
        return new StartReplayResponse($result->toArray());
    }
}
