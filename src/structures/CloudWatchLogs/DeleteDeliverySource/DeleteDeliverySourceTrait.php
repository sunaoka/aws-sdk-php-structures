<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDeliverySource;

trait DeleteDeliverySourceTrait
{
    /**
     * @param DeleteDeliverySourceRequest $args
     * @return void
     */
    public function deleteDeliverySource(DeleteDeliverySourceRequest $args)
    {
        parent::deleteDeliverySource($args->toArray());
    }
}
