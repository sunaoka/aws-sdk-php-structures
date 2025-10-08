<?php

namespace Sunaoka\Aws\Structures\Iam\GetSSHPublicKey;

trait GetSSHPublicKeyTrait
{
    /**
     * @param GetSSHPublicKeyRequest $args
     * @return GetSSHPublicKeyResponse
     */
    public function getSSHPublicKey(GetSSHPublicKeyRequest $args)
    {
        $result = parent::getSSHPublicKey($args->toArray());
        return new GetSSHPublicKeyResponse($result->toArray());
    }
}
