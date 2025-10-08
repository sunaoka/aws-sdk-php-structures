<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateEncryptionKey;

trait UpdateEncryptionKeyTrait
{
    /**
     * @param UpdateEncryptionKeyRequest $args
     * @return UpdateEncryptionKeyResponse
     */
    public function updateEncryptionKey(UpdateEncryptionKeyRequest $args)
    {
        $result = parent::updateEncryptionKey($args->toArray());
        return new UpdateEncryptionKeyResponse($result->toArray());
    }
}
