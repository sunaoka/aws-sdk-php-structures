<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateSSHPublicKey;

trait UpdateSSHPublicKeyTrait
{
    /**
     * @param UpdateSSHPublicKeyRequest $args
     * @return void
     */
    public function updateSSHPublicKey(UpdateSSHPublicKeyRequest $args)
    {
        parent::updateSSHPublicKey($args->toArray());
    }
}
