<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamKey;

trait GetStreamKeyTrait
{
    /**
     * @param GetStreamKeyRequest $args
     * @return GetStreamKeyResponse
     */
    public function getStreamKey(GetStreamKeyRequest $args)
    {
        $result = parent::getStreamKey($args->toArray());
        return new GetStreamKeyResponse($result->toArray());
    }
}
