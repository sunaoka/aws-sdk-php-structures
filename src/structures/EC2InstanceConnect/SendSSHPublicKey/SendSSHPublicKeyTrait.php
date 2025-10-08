<?php

namespace Sunaoka\Aws\Structures\EC2InstanceConnect\SendSSHPublicKey;

trait SendSSHPublicKeyTrait
{
    /**
     * @param SendSSHPublicKeyRequest $args
     * @return SendSSHPublicKeyResponse
     */
    public function sendSSHPublicKey(SendSSHPublicKeyRequest $args)
    {
        $result = parent::sendSSHPublicKey($args->toArray());
        return new SendSSHPublicKeyResponse($result->toArray());
    }
}
