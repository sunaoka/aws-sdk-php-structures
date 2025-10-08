<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpointWeightsAndCapacities;

trait UpdateEndpointWeightsAndCapacitiesTrait
{
    /**
     * @param UpdateEndpointWeightsAndCapacitiesRequest $args
     * @return UpdateEndpointWeightsAndCapacitiesResponse
     */
    public function updateEndpointWeightsAndCapacities(UpdateEndpointWeightsAndCapacitiesRequest $args)
    {
        $result = parent::updateEndpointWeightsAndCapacities($args->toArray());
        return new UpdateEndpointWeightsAndCapacitiesResponse($result->toArray());
    }
}
