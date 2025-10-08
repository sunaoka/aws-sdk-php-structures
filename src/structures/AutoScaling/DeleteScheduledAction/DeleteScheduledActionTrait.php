<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteScheduledAction;

trait DeleteScheduledActionTrait
{
    /**
     * @param DeleteScheduledActionRequest $args
     * @return void
     */
    public function deleteScheduledAction(DeleteScheduledActionRequest $args)
    {
        parent::deleteScheduledAction($args->toArray());
    }
}
