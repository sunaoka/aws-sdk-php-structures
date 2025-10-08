<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask;

trait PollForDecisionTaskTrait
{
    /**
     * @param PollForDecisionTaskRequest $args
     * @return PollForDecisionTaskResponse
     */
    public function pollForDecisionTask(PollForDecisionTaskRequest $args)
    {
        $result = parent::pollForDecisionTask($args->toArray());
        return new PollForDecisionTaskResponse($result->toArray());
    }
}
