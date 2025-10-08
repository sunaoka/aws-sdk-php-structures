<?php

namespace Sunaoka\Aws\Structures\Route53\DeactivateKeySigningKey;

trait DeactivateKeySigningKeyTrait
{
    /**
     * @param DeactivateKeySigningKeyRequest $args
     * @return DeactivateKeySigningKeyResponse
     */
    public function deactivateKeySigningKey(DeactivateKeySigningKeyRequest $args)
    {
        $result = parent::deactivateKeySigningKey($args->toArray());
        return new DeactivateKeySigningKeyResponse($result->toArray());
    }
}
