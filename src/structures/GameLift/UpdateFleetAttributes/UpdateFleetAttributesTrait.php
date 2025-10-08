<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateFleetAttributes;

trait UpdateFleetAttributesTrait
{
    /**
     * @param UpdateFleetAttributesRequest $args
     * @return UpdateFleetAttributesResponse
     */
    public function updateFleetAttributes(UpdateFleetAttributesRequest $args)
    {
        $result = parent::updateFleetAttributes($args->toArray());
        return new UpdateFleetAttributesResponse($result->toArray());
    }
}
