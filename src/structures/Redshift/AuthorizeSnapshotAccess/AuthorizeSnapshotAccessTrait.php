<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeSnapshotAccess;

trait AuthorizeSnapshotAccessTrait
{
    /**
     * @param AuthorizeSnapshotAccessRequest $args
     * @return AuthorizeSnapshotAccessResponse
     */
    public function authorizeSnapshotAccess(AuthorizeSnapshotAccessRequest $args)
    {
        $result = parent::authorizeSnapshotAccess($args->toArray());
        return new AuthorizeSnapshotAccessResponse($result->toArray());
    }
}
