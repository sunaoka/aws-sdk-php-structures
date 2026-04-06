<?php

namespace Sunaoka\Aws\Structures\WAFV2\DeleteAPIKey;

trait DeleteAPIKeyTrait
{
    /**
     * @param DeleteAPIKeyRequest $args
     * @return DeleteAPIKeyResponse
     */
    public function deleteAPIKey(DeleteAPIKeyRequest $args)
    {
        $result = parent::deleteAPIKey($args->toArray());
        return new DeleteAPIKeyResponse($result->toArray());
    }
}
