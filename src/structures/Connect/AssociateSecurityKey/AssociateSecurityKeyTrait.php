<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateSecurityKey;

trait AssociateSecurityKeyTrait
{
    /**
     * @param AssociateSecurityKeyRequest $args
     * @return AssociateSecurityKeyResponse
     */
    public function associateSecurityKey(AssociateSecurityKeyRequest $args)
    {
        $result = parent::associateSecurityKey($args->toArray());
        return new AssociateSecurityKeyResponse($result->toArray());
    }
}
