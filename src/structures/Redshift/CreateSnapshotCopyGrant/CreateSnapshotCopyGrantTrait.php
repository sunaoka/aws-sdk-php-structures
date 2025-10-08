<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateSnapshotCopyGrant;

trait CreateSnapshotCopyGrantTrait
{
    /**
     * @param CreateSnapshotCopyGrantRequest $args
     * @return CreateSnapshotCopyGrantResponse
     */
    public function createSnapshotCopyGrant(CreateSnapshotCopyGrantRequest $args)
    {
        $result = parent::createSnapshotCopyGrant($args->toArray());
        return new CreateSnapshotCopyGrantResponse($result->toArray());
    }
}
