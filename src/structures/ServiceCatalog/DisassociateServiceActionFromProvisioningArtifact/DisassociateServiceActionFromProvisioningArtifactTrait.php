<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociateServiceActionFromProvisioningArtifact;

trait DisassociateServiceActionFromProvisioningArtifactTrait
{
    /**
     * @param DisassociateServiceActionFromProvisioningArtifactRequest $args
     * @return DisassociateServiceActionFromProvisioningArtifactResponse
     */
    public function disassociateServiceActionFromProvisioningArtifact(
        DisassociateServiceActionFromProvisioningArtifactRequest $args,
    ) {
        $result = parent::disassociateServiceActionFromProvisioningArtifact($args->toArray());
        return new DisassociateServiceActionFromProvisioningArtifactResponse($result->toArray());
    }
}
