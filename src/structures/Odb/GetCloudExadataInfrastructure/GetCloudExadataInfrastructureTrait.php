<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudExadataInfrastructure;

trait GetCloudExadataInfrastructureTrait
{
    /**
     * @param GetCloudExadataInfrastructureRequest $args
     * @return GetCloudExadataInfrastructureResponse
     */
    public function getCloudExadataInfrastructure(GetCloudExadataInfrastructureRequest $args)
    {
        $result = parent::getCloudExadataInfrastructure($args->toArray());
        return new GetCloudExadataInfrastructureResponse($result->toArray());
    }
}
