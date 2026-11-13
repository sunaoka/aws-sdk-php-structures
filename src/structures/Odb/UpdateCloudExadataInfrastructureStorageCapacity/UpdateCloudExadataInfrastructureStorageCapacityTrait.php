<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateCloudExadataInfrastructureStorageCapacity;

trait UpdateCloudExadataInfrastructureStorageCapacityTrait
{
    /**
     * @param UpdateCloudExadataInfrastructureStorageCapacityRequest $args
     * @return UpdateCloudExadataInfrastructureStorageCapacityResponse
     */
    public function updateCloudExadataInfrastructureStorageCapacity(UpdateCloudExadataInfrastructureStorageCapacityRequest $args)
    {
        $result = parent::updateCloudExadataInfrastructureStorageCapacity($args->toArray());
        return new UpdateCloudExadataInfrastructureStorageCapacityResponse($result->toArray());
    }
}
