<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteSSHPublicKey;

trait DeleteSSHPublicKeyTrait
{
    /**
     * @param DeleteSSHPublicKeyRequest $args
     * @return void
     */
    public function deleteSSHPublicKey(DeleteSSHPublicKeyRequest $args)
    {
        parent::deleteSSHPublicKey($args->toArray());
    }
}
