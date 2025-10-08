<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateKeyValueStore;

trait CreateKeyValueStoreTrait
{
    /**
     * @param CreateKeyValueStoreRequest $args
     * @return CreateKeyValueStoreResponse
     */
    public function createKeyValueStore(CreateKeyValueStoreRequest $args)
    {
        $result = parent::createKeyValueStore($args->toArray());
        return new CreateKeyValueStoreResponse($result->toArray());
    }
}
