<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail;

trait StartLiveTailTrait
{
    /**
     * @param StartLiveTailRequest $args
     * @return StartLiveTailResponse
     */
    public function startLiveTail(StartLiveTailRequest $args)
    {
        $result = parent::startLiveTail($args->toArray());
        return new StartLiveTailResponse($result->toArray());
    }
}
