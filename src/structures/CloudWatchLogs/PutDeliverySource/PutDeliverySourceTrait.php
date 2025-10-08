<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDeliverySource;

trait PutDeliverySourceTrait
{
    /**
     * @param PutDeliverySourceRequest $args
     * @return PutDeliverySourceResponse
     */
    public function putDeliverySource(PutDeliverySourceRequest $args)
    {
        $result = parent::putDeliverySource($args->toArray());
        return new PutDeliverySourceResponse($result->toArray());
    }
}
