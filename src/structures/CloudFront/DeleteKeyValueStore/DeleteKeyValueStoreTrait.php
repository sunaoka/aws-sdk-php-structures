<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteKeyValueStore;

trait DeleteKeyValueStoreTrait
{
    /**
     * @param DeleteKeyValueStoreRequest $args
     * @return void
     */
    public function deleteKeyValueStore(DeleteKeyValueStoreRequest $args)
    {
        parent::deleteKeyValueStore($args->toArray());
    }
}
