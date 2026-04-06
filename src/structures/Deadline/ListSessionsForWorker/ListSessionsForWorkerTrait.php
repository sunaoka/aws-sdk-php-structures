<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionsForWorker;

trait ListSessionsForWorkerTrait
{
    /**
     * @param ListSessionsForWorkerRequest $args
     * @return ListSessionsForWorkerResponse
     */
    public function listSessionsForWorker(ListSessionsForWorkerRequest $args)
    {
        $result = parent::listSessionsForWorker($args->toArray());
        return new ListSessionsForWorkerResponse($result->toArray());
    }
}
