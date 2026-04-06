<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteCloudExadataInfrastructure;

trait DeleteCloudExadataInfrastructureTrait
{
    /**
     * @param DeleteCloudExadataInfrastructureRequest $args
     * @return DeleteCloudExadataInfrastructureResponse
     */
    public function deleteCloudExadataInfrastructure(DeleteCloudExadataInfrastructureRequest $args)
    {
        $result = parent::deleteCloudExadataInfrastructure($args->toArray());
        return new DeleteCloudExadataInfrastructureResponse($result->toArray());
    }
}
