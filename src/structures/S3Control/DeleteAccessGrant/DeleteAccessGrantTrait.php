<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessGrant;

trait DeleteAccessGrantTrait
{
    /**
     * @param DeleteAccessGrantRequest $args
     * @return void
     */
    public function deleteAccessGrant(DeleteAccessGrantRequest $args)
    {
        parent::deleteAccessGrant($args->toArray());
    }
}
