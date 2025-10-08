<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted;

trait RespondDecisionTaskCompletedTrait
{
    /**
     * @param RespondDecisionTaskCompletedRequest $args
     * @return void
     */
    public function respondDecisionTaskCompleted(RespondDecisionTaskCompletedRequest $args)
    {
        parent::respondDecisionTaskCompleted($args->toArray());
    }
}
