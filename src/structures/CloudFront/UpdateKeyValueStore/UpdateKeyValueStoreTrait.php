<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateKeyValueStore;

trait UpdateKeyValueStoreTrait
{
    /**
     * @param UpdateKeyValueStoreRequest $args
     * @return UpdateKeyValueStoreResponse
     */
    public function updateKeyValueStore(UpdateKeyValueStoreRequest $args)
    {
        $result = parent::updateKeyValueStore($args->toArray());
        return new UpdateKeyValueStoreResponse($result->toArray());
    }
}
