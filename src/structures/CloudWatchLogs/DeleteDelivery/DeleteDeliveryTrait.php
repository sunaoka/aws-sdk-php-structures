<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDelivery;

trait DeleteDeliveryTrait
{
    /**
     * @param DeleteDeliveryRequest $args
     * @return void
     */
    public function deleteDelivery(DeleteDeliveryRequest $args)
    {
        parent::deleteDelivery($args->toArray());
    }
}
