<?php

namespace Sunaoka\Aws\Structures\Swf\RespondActivityTaskCanceled;

trait RespondActivityTaskCanceledTrait
{
    /**
     * @param RespondActivityTaskCanceledRequest $args
     * @return void
     */
    public function respondActivityTaskCanceled(RespondActivityTaskCanceledRequest $args)
    {
        parent::respondActivityTaskCanceled($args->toArray());
    }
}
