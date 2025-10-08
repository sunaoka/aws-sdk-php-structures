<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeactivateEventSource;

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
