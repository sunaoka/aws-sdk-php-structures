<?php

namespace Sunaoka\Aws\Structures\EC2InstanceConnect\SendSerialConsoleSSHPublicKey;

trait SendSerialConsoleSSHPublicKeyTrait
{
    /**
     * @param SendSerialConsoleSSHPublicKeyRequest $args
     * @return SendSerialConsoleSSHPublicKeyResponse
     */
    public function sendSerialConsoleSSHPublicKey(SendSerialConsoleSSHPublicKeyRequest $args)
    {
        $result = parent::sendSerialConsoleSSHPublicKey($args->toArray());
        return new SendSerialConsoleSSHPublicKeyResponse($result->toArray());
    }
}
