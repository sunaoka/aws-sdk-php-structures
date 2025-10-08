<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudExadataInfrastructure;

trait CreateCloudExadataInfrastructureTrait
{
    /**
     * @param CreateCloudExadataInfrastructureRequest $args
     * @return CreateCloudExadataInfrastructureResponse
     */
    public function createCloudExadataInfrastructure(CreateCloudExadataInfrastructureRequest $args)
    {
        $result = parent::createCloudExadataInfrastructure($args->toArray());
        return new CreateCloudExadataInfrastructureResponse($result->toArray());
    }
}
