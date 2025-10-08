<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateAPIKey;

trait CreateAPIKeyTrait
{
    /**
     * @param CreateAPIKeyRequest $args
     * @return CreateAPIKeyResponse
     */
    public function createAPIKey(CreateAPIKeyRequest $args)
    {
        $result = parent::createAPIKey($args->toArray());
        return new CreateAPIKeyResponse($result->toArray());
    }
}
