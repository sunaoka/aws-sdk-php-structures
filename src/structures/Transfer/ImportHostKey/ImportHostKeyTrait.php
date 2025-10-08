<?php

namespace Sunaoka\Aws\Structures\Transfer\ImportHostKey;

trait ImportHostKeyTrait
{
    /**
     * @param ImportHostKeyRequest $args
     * @return ImportHostKeyResponse
     */
    public function importHostKey(ImportHostKeyRequest $args)
    {
        $result = parent::importHostKey($args->toArray());
        return new ImportHostKeyResponse($result->toArray());
    }
}
