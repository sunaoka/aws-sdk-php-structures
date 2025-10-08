<?php

namespace Sunaoka\Aws\Structures\Swf\RespondActivityTaskCompleted;

trait RespondActivityTaskCompletedTrait
{
    /**
     * @param RespondActivityTaskCompletedRequest $args
     * @return void
     */
    public function respondActivityTaskCompleted(RespondActivityTaskCompletedRequest $args)
    {
        parent::respondActivityTaskCompleted($args->toArray());
    }
}
