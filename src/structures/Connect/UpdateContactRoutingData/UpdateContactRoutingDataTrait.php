<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData;

trait UpdateContactRoutingDataTrait
{
    /**
     * @param UpdateContactRoutingDataRequest $args
     * @return UpdateContactRoutingDataResponse
     */
    public function updateContactRoutingData(UpdateContactRoutingDataRequest $args)
    {
        $result = parent::updateContactRoutingData($args->toArray());
        return new UpdateContactRoutingDataResponse($result->toArray());
    }
}
