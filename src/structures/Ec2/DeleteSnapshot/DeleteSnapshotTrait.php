<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSnapshot;

trait DeleteSnapshotTrait
{
    /**
     * @param DeleteSnapshotRequest $args
     * @return void
     */
    public function deleteSnapshot(DeleteSnapshotRequest $args)
    {
        parent::deleteSnapshot($args->toArray());
    }
}
