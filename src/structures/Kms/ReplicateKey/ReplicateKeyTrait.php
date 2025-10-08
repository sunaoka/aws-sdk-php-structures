<?php

namespace Sunaoka\Aws\Structures\Kms\ReplicateKey;

trait ReplicateKeyTrait
{
    /**
     * @param ReplicateKeyRequest $args
     * @return ReplicateKeyResponse
     */
    public function replicateKey(ReplicateKeyRequest $args)
    {
        $result = parent::replicateKey($args->toArray());
        return new ReplicateKeyResponse($result->toArray());
    }
}
