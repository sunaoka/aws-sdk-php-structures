<?php

namespace Sunaoka\Aws\Structures\Redshift\RotateEncryptionKey;

trait RotateEncryptionKeyTrait
{
    /**
     * @param RotateEncryptionKeyRequest $args
     * @return RotateEncryptionKeyResponse
     */
    public function rotateEncryptionKey(RotateEncryptionKeyRequest $args)
    {
        $result = parent::rotateEncryptionKey($args->toArray());
        return new RotateEncryptionKeyResponse($result->toArray());
    }
}
