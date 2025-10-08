<?php

namespace Sunaoka\Aws\Structures\Iam\UploadSSHPublicKey;

trait UploadSSHPublicKeyTrait
{
    /**
     * @param UploadSSHPublicKeyRequest $args
     * @return UploadSSHPublicKeyResponse
     */
    public function uploadSSHPublicKey(UploadSSHPublicKeyRequest $args)
    {
        $result = parent::uploadSSHPublicKey($args->toArray());
        return new UploadSSHPublicKeyResponse($result->toArray());
    }
}
