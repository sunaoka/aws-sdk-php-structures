<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateAccessKey;

trait UpdateAccessKeyTrait
{
    /**
     * @param UpdateAccessKeyRequest $args
     * @return void
     */
    public function updateAccessKey(UpdateAccessKeyRequest $args)
    {
        parent::updateAccessKey($args->toArray());
    }
}
