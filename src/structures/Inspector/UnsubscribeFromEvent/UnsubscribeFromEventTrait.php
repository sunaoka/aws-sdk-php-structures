<?php

namespace Sunaoka\Aws\Structures\Inspector\UnsubscribeFromEvent;

trait UnsubscribeFromEventTrait
{
    /**
     * @param UnsubscribeFromEventRequest $args
     * @return void
     */
    public function unsubscribeFromEvent(UnsubscribeFromEventRequest $args)
    {
        parent::unsubscribeFromEvent($args->toArray());
    }
}
