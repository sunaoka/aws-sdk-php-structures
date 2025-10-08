<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdatePublicKey;

trait UpdatePublicKeyTrait
{
    /**
     * @param UpdatePublicKeyRequest $args
     * @return UpdatePublicKeyResponse
     */
    public function updatePublicKey(UpdatePublicKeyRequest $args)
    {
        $result = parent::updatePublicKey($args->toArray());
        return new UpdatePublicKeyResponse($result->toArray());
    }
}
