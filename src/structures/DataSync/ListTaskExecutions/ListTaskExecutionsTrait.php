<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTaskExecutions;

trait ListTaskExecutionsTrait
{
    /**
     * @param ListTaskExecutionsRequest $args
     * @return ListTaskExecutionsResponse
     */
    public function listTaskExecutions(ListTaskExecutionsRequest $args)
    {
        $result = parent::listTaskExecutions($args->toArray());
        return new ListTaskExecutionsResponse($result->toArray());
    }
}
