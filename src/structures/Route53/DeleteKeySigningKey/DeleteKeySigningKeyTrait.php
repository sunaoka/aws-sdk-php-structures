<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteKeySigningKey;

trait DeleteKeySigningKeyTrait
{
    /**
     * @param DeleteKeySigningKeyRequest $args
     * @return DeleteKeySigningKeyResponse
     */
    public function deleteKeySigningKey(DeleteKeySigningKeyRequest $args)
    {
        $result = parent::deleteKeySigningKey($args->toArray());
        return new DeleteKeySigningKeyResponse($result->toArray());
    }
}
