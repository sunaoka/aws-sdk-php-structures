<?php

namespace Sunaoka\Aws\Structures\DataExchange\DeleteEventAction;

trait DeleteEventActionTrait
{
    /**
     * @param DeleteEventActionRequest $args
     * @return void
     */
    public function deleteEventAction(DeleteEventActionRequest $args)
    {
        parent::deleteEventAction($args->toArray());
    }
}
