<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupAccessPoint;

trait DeleteBackupAccessPointTrait
{
    /**
     * @param DeleteBackupAccessPointRequest $args
     * @return void
     */
    public function deleteBackupAccessPoint(DeleteBackupAccessPointRequest $args)
    {
        parent::deleteBackupAccessPoint($args->toArray());
    }
}
