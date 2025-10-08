<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeactivateEventSource;

trait DeactivateEventSourceTrait
{
    /**
     * @param DeactivateEventSourceRequest $args
     * @return void
     */
    public function deactivateEventSource(DeactivateEventSourceRequest $args)
    {
        parent::deactivateEventSource($args->toArray());
    }
}
