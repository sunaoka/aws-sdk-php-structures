<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDestination;

trait DeleteDestinationTrait
{
    /**
     * @param DeleteDestinationRequest $args
     * @return void
     */
    public function deleteDestination(DeleteDestinationRequest $args)
    {
        parent::deleteDestination($args->toArray());
    }
}
