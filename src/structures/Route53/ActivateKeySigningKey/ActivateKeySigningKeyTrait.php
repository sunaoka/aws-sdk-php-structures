<?php

namespace Sunaoka\Aws\Structures\Route53\ActivateKeySigningKey;

trait ActivateKeySigningKeyTrait
{
    /**
     * @param ActivateKeySigningKeyRequest $args
     * @return ActivateKeySigningKeyResponse
     */
    public function activateKeySigningKey(ActivateKeySigningKeyRequest $args)
    {
        $result = parent::activateKeySigningKey($args->toArray());
        return new ActivateKeySigningKeyResponse($result->toArray());
    }
}
