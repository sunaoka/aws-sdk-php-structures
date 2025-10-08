<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProjectDataDelivery;

trait UpdateProjectDataDeliveryTrait
{
    /**
     * @param UpdateProjectDataDeliveryRequest $args
     * @return UpdateProjectDataDeliveryResponse
     */
    public function updateProjectDataDelivery(UpdateProjectDataDeliveryRequest $args)
    {
        $result = parent::updateProjectDataDelivery($args->toArray());
        return new UpdateProjectDataDeliveryResponse($result->toArray());
    }
}
