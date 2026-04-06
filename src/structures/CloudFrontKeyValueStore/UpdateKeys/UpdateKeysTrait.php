<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\UpdateKeys;

trait UpdateKeysTrait
{
    /**
     * @param UpdateKeysRequest $args
     * @return UpdateKeysResponse
     */
    public function updateKeys(UpdateKeysRequest $args)
    {
        $result = parent::updateKeys($args->toArray());
        return new UpdateKeysResponse($result->toArray());
    }
}
