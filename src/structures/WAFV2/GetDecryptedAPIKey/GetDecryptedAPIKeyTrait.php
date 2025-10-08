<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetDecryptedAPIKey;

trait GetDecryptedAPIKeyTrait
{
    /**
     * @param GetDecryptedAPIKeyRequest $args
     * @return GetDecryptedAPIKeyResponse
     */
    public function getDecryptedAPIKey(GetDecryptedAPIKeyRequest $args)
    {
        $result = parent::getDecryptedAPIKey($args->toArray());
        return new GetDecryptedAPIKeyResponse($result->toArray());
    }
}
