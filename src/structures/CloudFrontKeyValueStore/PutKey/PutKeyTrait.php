<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\PutKey;

trait PutKeyTrait
{
    /**
     * @param PutKeyRequest $args
     * @return PutKeyResponse
     */
    public function putKey(PutKeyRequest $args)
    {
        $result = parent::putKey($args->toArray());
        return new PutKeyResponse($result->toArray());
    }
}
