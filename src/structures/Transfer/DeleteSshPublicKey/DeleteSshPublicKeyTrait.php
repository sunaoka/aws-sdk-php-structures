<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteSshPublicKey;

trait DeleteSshPublicKeyTrait
{
    /**
     * @param DeleteSshPublicKeyRequest $args
     * @return void
     */
    public function deleteSshPublicKey(DeleteSshPublicKeyRequest $args)
    {
        parent::deleteSshPublicKey($args->toArray());
    }
}
