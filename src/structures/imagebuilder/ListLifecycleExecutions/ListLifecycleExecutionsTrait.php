<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutions;

trait ListLifecycleExecutionsTrait
{
    /**
     * @param ListLifecycleExecutionsRequest $args
     * @return ListLifecycleExecutionsResponse
     */
    public function listLifecycleExecutions(ListLifecycleExecutionsRequest $args)
    {
        $result = parent::listLifecycleExecutions($args->toArray());
        return new ListLifecycleExecutionsResponse($result->toArray());
    }
}
