<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisioningArtifacts;

trait ListProvisioningArtifactsTrait
{
    /**
     * @param ListProvisioningArtifactsRequest $args
     * @return ListProvisioningArtifactsResponse
     */
    public function listProvisioningArtifacts(ListProvisioningArtifactsRequest $args)
    {
        $result = parent::listProvisioningArtifacts($args->toArray());
        return new ListProvisioningArtifactsResponse($result->toArray());
    }
}
