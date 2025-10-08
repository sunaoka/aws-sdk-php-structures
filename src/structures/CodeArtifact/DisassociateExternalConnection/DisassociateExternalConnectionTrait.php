<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DisassociateExternalConnection;

trait DisassociateExternalConnectionTrait
{
    /**
     * @param DisassociateExternalConnectionRequest $args
     * @return DisassociateExternalConnectionResponse
     */
    public function disassociateExternalConnection(DisassociateExternalConnectionRequest $args)
    {
        $result = parent::disassociateExternalConnection($args->toArray());
        return new DisassociateExternalConnectionResponse($result->toArray());
    }
}
