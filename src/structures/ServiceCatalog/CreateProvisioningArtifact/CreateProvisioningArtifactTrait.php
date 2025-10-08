<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProvisioningArtifact;

trait CreateProvisioningArtifactTrait
{
    /**
     * @param CreateProvisioningArtifactRequest $args
     * @return CreateProvisioningArtifactResponse
     */
    public function createProvisioningArtifact(CreateProvisioningArtifactRequest $args)
    {
        $result = parent::createProvisioningArtifact($args->toArray());
        return new CreateProvisioningArtifactResponse($result->toArray());
    }
}
