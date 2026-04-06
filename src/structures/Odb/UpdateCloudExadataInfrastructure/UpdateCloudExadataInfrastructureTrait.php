<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateCloudExadataInfrastructure;

trait UpdateCloudExadataInfrastructureTrait
{
    /**
     * @param UpdateCloudExadataInfrastructureRequest $args
     * @return UpdateCloudExadataInfrastructureResponse
     */
    public function updateCloudExadataInfrastructure(UpdateCloudExadataInfrastructureRequest $args)
    {
        $result = parent::updateCloudExadataInfrastructure($args->toArray());
        return new UpdateCloudExadataInfrastructureResponse($result->toArray());
    }
}
