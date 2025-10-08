<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteProvisioningArtifact;

trait DeleteProvisioningArtifactTrait
{
    /**
     * @param DeleteProvisioningArtifactRequest $args
     * @return DeleteProvisioningArtifactResponse
     */
    public function deleteProvisioningArtifact(DeleteProvisioningArtifactRequest $args)
    {
        $result = parent::deleteProvisioningArtifact($args->toArray());
        return new DeleteProvisioningArtifactResponse($result->toArray());
    }
}
