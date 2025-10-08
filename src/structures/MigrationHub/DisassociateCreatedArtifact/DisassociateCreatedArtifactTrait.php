<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DisassociateCreatedArtifact;

trait DisassociateCreatedArtifactTrait
{
    /**
     * @param DisassociateCreatedArtifactRequest $args
     * @return DisassociateCreatedArtifactResponse
     */
    public function disassociateCreatedArtifact(DisassociateCreatedArtifactRequest $args)
    {
        $result = parent::disassociateCreatedArtifact($args->toArray());
        return new DisassociateCreatedArtifactResponse($result->toArray());
    }
}
