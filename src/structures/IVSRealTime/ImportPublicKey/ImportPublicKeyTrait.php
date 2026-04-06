<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ImportPublicKey;

trait ImportPublicKeyTrait
{
    /**
     * @param ImportPublicKeyRequest $args
     * @return ImportPublicKeyResponse
     */
    public function importPublicKey(ImportPublicKeyRequest $args)
    {
        $result = parent::importPublicKey($args->toArray());
        return new ImportPublicKeyResponse($result->toArray());
    }
}
