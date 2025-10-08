<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\AssociateExternalConnection;

trait AssociateExternalConnectionTrait
{
    /**
     * @param AssociateExternalConnectionRequest $args
     * @return AssociateExternalConnectionResponse
     */
    public function associateExternalConnection(AssociateExternalConnectionRequest $args)
    {
        $result = parent::associateExternalConnection($args->toArray());
        return new AssociateExternalConnectionResponse($result->toArray());
    }
}
