<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateBrokerType;

trait UpdateBrokerTypeTrait
{
    /**
     * @param UpdateBrokerTypeRequest $args
     * @return UpdateBrokerTypeResponse
     */
    public function updateBrokerType(UpdateBrokerTypeRequest $args)
    {
        $result = parent::updateBrokerType($args->toArray());
        return new UpdateBrokerTypeResponse($result->toArray());
    }
}
