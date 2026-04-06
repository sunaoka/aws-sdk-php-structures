<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessGrantsLocation;

trait DeleteAccessGrantsLocationTrait
{
    /**
     * @param DeleteAccessGrantsLocationRequest $args
     * @return void
     */
    public function deleteAccessGrantsLocation(DeleteAccessGrantsLocationRequest $args)
    {
        parent::deleteAccessGrantsLocation($args->toArray());
    }
}
