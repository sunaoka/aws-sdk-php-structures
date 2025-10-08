<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ActivateEventSource;

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
