<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateExascaleCloudExadataInfrastructure;

trait UpdateExascaleCloudExadataInfrastructureTrait
{
    /**
     * @param UpdateExascaleCloudExadataInfrastructureRequest $args
     * @return UpdateExascaleCloudExadataInfrastructureResponse
     */
    public function updateExascaleCloudExadataInfrastructure(UpdateExascaleCloudExadataInfrastructureRequest $args)
    {
        $result = parent::updateExascaleCloudExadataInfrastructure($args->toArray());
        return new UpdateExascaleCloudExadataInfrastructureResponse($result->toArray());
    }
}
