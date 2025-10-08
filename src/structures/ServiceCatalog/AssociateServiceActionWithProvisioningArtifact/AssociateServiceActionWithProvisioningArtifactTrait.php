<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AssociateServiceActionWithProvisioningArtifact;

trait AssociateServiceActionWithProvisioningArtifactTrait
{
    /**
     * @param AssociateServiceActionWithProvisioningArtifactRequest $args
     * @return AssociateServiceActionWithProvisioningArtifactResponse
     */
    public function associateServiceActionWithProvisioningArtifact(
        AssociateServiceActionWithProvisioningArtifactRequest $args,
    ) {
        $result = parent::associateServiceActionWithProvisioningArtifact($args->toArray());
        return new AssociateServiceActionWithProvisioningArtifactResponse($result->toArray());
    }
}
