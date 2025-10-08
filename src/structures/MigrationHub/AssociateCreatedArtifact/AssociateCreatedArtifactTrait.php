<?php

namespace Sunaoka\Aws\Structures\MigrationHub\AssociateCreatedArtifact;

trait AssociateCreatedArtifactTrait
{
    /**
     * @param AssociateCreatedArtifactRequest $args
     * @return AssociateCreatedArtifactResponse
     */
    public function associateCreatedArtifact(AssociateCreatedArtifactRequest $args)
    {
        $result = parent::associateCreatedArtifact($args->toArray());
        return new AssociateCreatedArtifactResponse($result->toArray());
    }
}
