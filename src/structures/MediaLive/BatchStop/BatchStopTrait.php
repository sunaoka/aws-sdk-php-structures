<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchStop;

trait BatchStopTrait
{
    /**
     * @param BatchStopRequest $args
     * @return BatchStopResponse
     */
    public function batchStop(BatchStopRequest $args)
    {
        $result = parent::batchStop($args->toArray());
        return new BatchStopResponse($result->toArray());
    }
}
