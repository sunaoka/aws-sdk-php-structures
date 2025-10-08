<?php

namespace Sunaoka\Aws\Structures\EventBridge\ActivateEventSource;

trait ActivateEventSourceTrait
{
    /**
     * @param ActivateEventSourceRequest $args
     * @return void
     */
    public function activateEventSource(ActivateEventSourceRequest $args)
    {
        parent::activateEventSource($args->toArray());
    }
}
