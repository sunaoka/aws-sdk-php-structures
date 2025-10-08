<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableEncryption;

trait GetTableEncryptionTrait
{
    /**
     * @param GetTableEncryptionRequest $args
     * @return GetTableEncryptionResponse
     */
    public function getTableEncryption(GetTableEncryptionRequest $args)
    {
        $result = parent::getTableEncryption($args->toArray());
        return new GetTableEncryptionResponse($result->toArray());
    }
}
