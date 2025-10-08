<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudExadataInfrastructureUnallocatedResources;

trait GetCloudExadataInfrastructureUnallocatedResourcesTrait
{
    /**
     * @param GetCloudExadataInfrastructureUnallocatedResourcesRequest $args
     * @return GetCloudExadataInfrastructureUnallocatedResourcesResponse
     */
    public function getCloudExadataInfrastructureUnallocatedResources(GetCloudExadataInfrastructureUnallocatedResourcesRequest $args)
    {
        $result = parent::getCloudExadataInfrastructureUnallocatedResources($args->toArray());
        return new GetCloudExadataInfrastructureUnallocatedResourcesResponse($result->toArray());
    }
}
