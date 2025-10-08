<?php

namespace Sunaoka\Aws\Structures\Swf\RespondActivityTaskFailed;

trait RespondActivityTaskFailedTrait
{
    /**
     * @param RespondActivityTaskFailedRequest $args
     * @return void
     */
    public function respondActivityTaskFailed(RespondActivityTaskFailedRequest $args)
    {
        parent::respondActivityTaskFailed($args->toArray());
    }
}
