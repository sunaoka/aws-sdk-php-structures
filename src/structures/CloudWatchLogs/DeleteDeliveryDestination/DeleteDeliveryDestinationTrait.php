<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDeliveryDestination;

trait DeleteDeliveryDestinationTrait
{
    /**
     * @param DeleteDeliveryDestinationRequest $args
     * @return void
     */
    public function deleteDeliveryDestination(DeleteDeliveryDestinationRequest $args)
    {
        parent::deleteDeliveryDestination($args->toArray());
    }
}
