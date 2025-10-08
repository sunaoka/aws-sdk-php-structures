<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListServiceActionsForProvisioningArtifact;

trait ListServiceActionsForProvisioningArtifactTrait
{
    /**
     * @param ListServiceActionsForProvisioningArtifactRequest $args
     * @return ListServiceActionsForProvisioningArtifactResponse
     */
    public function listServiceActionsForProvisioningArtifact(ListServiceActionsForProvisioningArtifactRequest $args)
    {
        $result = parent::listServiceActionsForProvisioningArtifact($args->toArray());
        return new ListServiceActionsForProvisioningArtifactResponse($result->toArray());
    }
}
