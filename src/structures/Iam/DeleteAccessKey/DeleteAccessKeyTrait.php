<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteAccessKey;

trait DeleteAccessKeyTrait
{
    /**
     * @param DeleteAccessKeyRequest $args
     * @return void
     */
    public function deleteAccessKey(DeleteAccessKeyRequest $args)
    {
        parent::deleteAccessKey($args->toArray());
    }
}
