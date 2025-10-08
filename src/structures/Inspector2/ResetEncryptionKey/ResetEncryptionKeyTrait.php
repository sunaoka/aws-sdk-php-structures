<?php

namespace Sunaoka\Aws\Structures\Inspector2\ResetEncryptionKey;

trait ResetEncryptionKeyTrait
{
    /**
     * @param ResetEncryptionKeyRequest $args
     * @return ResetEncryptionKeyResponse
     */
    public function resetEncryptionKey(ResetEncryptionKeyRequest $args)
    {
        $result = parent::resetEncryptionKey($args->toArray());
        return new ResetEncryptionKeyResponse($result->toArray());
    }
}
