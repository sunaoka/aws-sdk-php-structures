<?php

namespace Sunaoka\Aws\Structures\Odb\ListCloudExadataInfrastructures;

trait ListCloudExadataInfrastructuresTrait
{
    /**
     * @param ListCloudExadataInfrastructuresRequest $args
     * @return ListCloudExadataInfrastructuresResponse
     */
    public function listCloudExadataInfrastructures(ListCloudExadataInfrastructuresRequest $args)
    {
        $result = parent::listCloudExadataInfrastructures($args->toArray());
        return new ListCloudExadataInfrastructuresResponse($result->toArray());
    }
}
