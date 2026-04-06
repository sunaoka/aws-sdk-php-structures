<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliverySource;

trait GetDeliverySourceTrait
{
    /**
     * @param GetDeliverySourceRequest $args
     * @return GetDeliverySourceResponse
     */
    public function getDeliverySource(GetDeliverySourceRequest $args)
    {
        $result = parent::getDeliverySource($args->toArray());
        return new GetDeliverySourceResponse($result->toArray());
    }
}
