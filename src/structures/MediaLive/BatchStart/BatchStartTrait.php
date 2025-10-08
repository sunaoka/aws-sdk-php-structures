<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchStart;

trait BatchStartTrait
{
    /**
     * @param BatchStartRequest $args
     * @return BatchStartResponse
     */
    public function batchStart(BatchStartRequest $args)
    {
        $result = parent::batchStart($args->toArray());
        return new BatchStartResponse($result->toArray());
    }
}
