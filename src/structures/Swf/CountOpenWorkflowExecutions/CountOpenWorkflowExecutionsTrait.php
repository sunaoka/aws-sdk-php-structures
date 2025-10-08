<?php

namespace Sunaoka\Aws\Structures\Swf\CountOpenWorkflowExecutions;

trait CountOpenWorkflowExecutionsTrait
{
    /**
     * @param CountOpenWorkflowExecutionsRequest $args
     * @return CountOpenWorkflowExecutionsResponse
     */
    public function countOpenWorkflowExecutions(CountOpenWorkflowExecutionsRequest $args)
    {
        $result = parent::countOpenWorkflowExecutions($args->toArray());
        return new CountOpenWorkflowExecutionsResponse($result->toArray());
    }
}
