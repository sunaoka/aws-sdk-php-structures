<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryption;

trait GetFieldLevelEncryptionTrait
{
    /**
     * @param GetFieldLevelEncryptionRequest $args
     * @return GetFieldLevelEncryptionResponse
     */
    public function getFieldLevelEncryption(GetFieldLevelEncryptionRequest $args)
    {
        $result = parent::getFieldLevelEncryption($args->toArray());
        return new GetFieldLevelEncryptionResponse($result->toArray());
    }
}
