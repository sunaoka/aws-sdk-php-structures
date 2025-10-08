<?php

namespace Sunaoka\Aws\Structures\IVS\DeleteStreamKey;

trait DeleteStreamKeyTrait
{
    /**
     * @param DeleteStreamKeyRequest $args
     * @return void
     */
    public function deleteStreamKey(DeleteStreamKeyRequest $args)
    {
        parent::deleteStreamKey($args->toArray());
    }
}
