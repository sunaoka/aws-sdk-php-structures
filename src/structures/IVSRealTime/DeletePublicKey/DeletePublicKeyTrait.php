<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DeletePublicKey;

trait DeletePublicKeyTrait
{
    /**
     * @param DeletePublicKeyRequest $args
     * @return DeletePublicKeyResponse
     */
    public function deletePublicKey(DeletePublicKeyRequest $args)
    {
        $result = parent::deletePublicKey($args->toArray());
        return new DeletePublicKeyResponse($result->toArray());
    }
}
