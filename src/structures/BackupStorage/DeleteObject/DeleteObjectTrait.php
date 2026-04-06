<?php

namespace Sunaoka\Aws\Structures\BackupStorage\DeleteObject;

trait DeleteObjectTrait
{
    /**
     * @param DeleteObjectRequest $args
     * @return void
     */
    public function deleteObject(DeleteObjectRequest $args)
    {
        parent::deleteObject($args->toArray());
    }
}
