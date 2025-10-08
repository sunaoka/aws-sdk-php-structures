<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteSnapshotCopyGrant;

trait DeleteSnapshotCopyGrantTrait
{
    /**
     * @param DeleteSnapshotCopyGrantRequest $args
     * @return void
     */
    public function deleteSnapshotCopyGrant(DeleteSnapshotCopyGrantRequest $args)
    {
        parent::deleteSnapshotCopyGrant($args->toArray());
    }
}
