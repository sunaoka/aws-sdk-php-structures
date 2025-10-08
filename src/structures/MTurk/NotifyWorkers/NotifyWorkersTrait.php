<?php

namespace Sunaoka\Aws\Structures\MTurk\NotifyWorkers;

trait NotifyWorkersTrait
{
    /**
     * @param NotifyWorkersRequest $args
     * @return NotifyWorkersResponse
     */
    public function notifyWorkers(NotifyWorkersRequest $args)
    {
        $result = parent::notifyWorkers($args->toArray());
        return new NotifyWorkersResponse($result->toArray());
    }
}
