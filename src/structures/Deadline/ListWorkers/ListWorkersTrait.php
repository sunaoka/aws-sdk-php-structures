<?php

namespace Sunaoka\Aws\Structures\Deadline\ListWorkers;

trait ListWorkersTrait
{
    /**
     * @param ListWorkersRequest $args
     * @return ListWorkersResponse
     */
    public function listWorkers(ListWorkersRequest $args)
    {
        $result = parent::listWorkers($args->toArray());
        return new ListWorkersResponse($result->toArray());
    }
}
