<?php

namespace Sunaoka\Aws\Structures\S3\UpdateObjectEncryption;

trait UpdateObjectEncryptionTrait
{
    /**
     * @param UpdateObjectEncryptionRequest $args
     * @return UpdateObjectEncryptionResponse
     */
    public function updateObjectEncryption(UpdateObjectEncryptionRequest $args)
    {
        $result = parent::updateObjectEncryption($args->toArray());
        return new UpdateObjectEncryptionResponse($result->toArray());
    }
}
