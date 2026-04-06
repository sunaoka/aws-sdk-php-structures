<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableSnapshotBlockPublicAccess;

trait DisableSnapshotBlockPublicAccessTrait
{
    /**
     * @param DisableSnapshotBlockPublicAccessRequest $args
     * @return DisableSnapshotBlockPublicAccessResponse
     */
    public function disableSnapshotBlockPublicAccess(DisableSnapshotBlockPublicAccessRequest $args)
    {
        $result = parent::disableSnapshotBlockPublicAccess($args->toArray());
        return new DisableSnapshotBlockPublicAccessResponse($result->toArray());
    }
}
