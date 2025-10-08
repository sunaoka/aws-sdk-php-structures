<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisioningArtifact;

trait UpdateProvisioningArtifactTrait
{
    /**
     * @param UpdateProvisioningArtifactRequest $args
     * @return UpdateProvisioningArtifactResponse
     */
    public function updateProvisioningArtifact(UpdateProvisioningArtifactRequest $args)
    {
        $result = parent::updateProvisioningArtifact($args->toArray());
        return new UpdateProvisioningArtifactResponse($result->toArray());
    }
}
