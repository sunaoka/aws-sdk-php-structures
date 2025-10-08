<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteRecoveryPoint;

trait DeleteRecoveryPointTrait
{
    /**
     * @param DeleteRecoveryPointRequest $args
     * @return void
     */
    public function deleteRecoveryPoint(DeleteRecoveryPointRequest $args)
    {
        parent::deleteRecoveryPoint($args->toArray());
    }
}
