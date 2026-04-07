<?php

namespace Sunaoka\Aws\Structures\S3Files\DeleteAccessPoint;

trait DeleteAccessPointTrait
{
    /**
     * @param DeleteAccessPointRequest $args
     * @return void
     */
    public function deleteAccessPoint(DeleteAccessPointRequest $args)
    {
        parent::deleteAccessPoint($args->toArray());
    }
}
