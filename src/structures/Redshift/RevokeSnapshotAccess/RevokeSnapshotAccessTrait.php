<?php

namespace Sunaoka\Aws\Structures\Redshift\RevokeSnapshotAccess;

trait RevokeSnapshotAccessTrait
{
    /**
     * @param RevokeSnapshotAccessRequest $args
     * @return RevokeSnapshotAccessResponse
     */
    public function revokeSnapshotAccess(RevokeSnapshotAccessRequest $args)
    {
        $result = parent::revokeSnapshotAccess($args->toArray());
        return new RevokeSnapshotAccessResponse($result->toArray());
    }
}
