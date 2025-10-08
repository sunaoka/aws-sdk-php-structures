<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\BatchDisassociateServiceActionFromProvisioningArtifact;

trait BatchDisassociateServiceActionFromProvisioningArtifactTrait
{
    /**
     * @param BatchDisassociateServiceActionFromProvisioningArtifactRequest $args
     * @return BatchDisassociateServiceActionFromProvisioningArtifactResponse
     */
    public function batchDisassociateServiceActionFromProvisioningArtifact(BatchDisassociateServiceActionFromProvisioningArtifactRequest $args)
    {
        $result = parent::batchDisassociateServiceActionFromProvisioningArtifact($args->toArray());
        return new BatchDisassociateServiceActionFromProvisioningArtifactResponse($result->toArray());
    }
}
