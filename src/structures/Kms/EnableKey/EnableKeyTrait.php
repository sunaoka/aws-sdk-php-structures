<?php

namespace Sunaoka\Aws\Structures\Kms\EnableKey;

trait EnableKeyTrait
{
    /**
     * @param EnableKeyRequest $args
     * @return void
     */
    public function enableKey(EnableKeyRequest $args)
    {
        parent::enableKey($args->toArray());
    }
}
