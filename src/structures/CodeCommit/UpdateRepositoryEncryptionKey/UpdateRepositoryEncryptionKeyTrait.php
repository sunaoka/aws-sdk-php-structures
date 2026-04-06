<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateRepositoryEncryptionKey;

trait UpdateRepositoryEncryptionKeyTrait
{
    /**
     * @param UpdateRepositoryEncryptionKeyRequest $args
     * @return UpdateRepositoryEncryptionKeyResponse
     */
    public function updateRepositoryEncryptionKey(UpdateRepositoryEncryptionKeyRequest $args)
    {
        $result = parent::updateRepositoryEncryptionKey($args->toArray());
        return new UpdateRepositoryEncryptionKeyResponse($result->toArray());
    }
}
