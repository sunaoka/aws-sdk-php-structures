<?php

namespace Sunaoka\Aws\Structures\Kms\DisableKey;

trait DisableKeyTrait
{
    /**
     * @param DisableKeyRequest $args
     * @return void
     */
    public function disableKey(DisableKeyRequest $args)
    {
        parent::disableKey($args->toArray());
    }
}
