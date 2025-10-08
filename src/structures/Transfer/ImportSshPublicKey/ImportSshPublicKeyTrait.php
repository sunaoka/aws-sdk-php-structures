<?php

namespace Sunaoka\Aws\Structures\Transfer\ImportSshPublicKey;

trait ImportSshPublicKeyTrait
{
    /**
     * @param ImportSshPublicKeyRequest $args
     * @return ImportSshPublicKeyResponse
     */
    public function importSshPublicKey(ImportSshPublicKeyRequest $args)
    {
        $result = parent::importSshPublicKey($args->toArray());
        return new ImportSshPublicKeyResponse($result->toArray());
    }
}
