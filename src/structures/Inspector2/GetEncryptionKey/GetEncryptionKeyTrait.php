<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetEncryptionKey;

trait GetEncryptionKeyTrait
{
    /**
     * @param GetEncryptionKeyRequest $args
     * @return GetEncryptionKeyResponse
     */
    public function getEncryptionKey(GetEncryptionKeyRequest $args)
    {
        $result = parent::getEncryptionKey($args->toArray());
        return new GetEncryptionKeyResponse($result->toArray());
    }
}
