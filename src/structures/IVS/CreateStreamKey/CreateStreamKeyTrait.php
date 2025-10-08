<?php

namespace Sunaoka\Aws\Structures\IVS\CreateStreamKey;

trait CreateStreamKeyTrait
{
    /**
     * @param CreateStreamKeyRequest $args
     * @return CreateStreamKeyResponse
     */
    public function createStreamKey(CreateStreamKeyRequest $args)
    {
        $result = parent::createStreamKey($args->toArray());
        return new CreateStreamKeyResponse($result->toArray());
    }
}
