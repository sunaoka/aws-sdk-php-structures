<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\BatchAssociateServiceActionWithProvisioningArtifact;

trait BatchAssociateServiceActionWithProvisioningArtifactTrait
{
    /**
     * @param BatchAssociateServiceActionWithProvisioningArtifactRequest $args
     * @return BatchAssociateServiceActionWithProvisioningArtifactResponse
     */
    public function batchAssociateServiceActionWithProvisioningArtifact(BatchAssociateServiceActionWithProvisioningArtifactRequest $args)
    {
        $result = parent::batchAssociateServiceActionWithProvisioningArtifact($args->toArray());
        return new BatchAssociateServiceActionWithProvisioningArtifactResponse($result->toArray());
    }
}
