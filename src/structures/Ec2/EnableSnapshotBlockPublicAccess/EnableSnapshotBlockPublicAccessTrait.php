<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableSnapshotBlockPublicAccess;

trait EnableSnapshotBlockPublicAccessTrait
{
    /**
     * @param EnableSnapshotBlockPublicAccessRequest $args
     * @return EnableSnapshotBlockPublicAccessResponse
     */
    public function enableSnapshotBlockPublicAccess(EnableSnapshotBlockPublicAccessRequest $args)
    {
        $result = parent::enableSnapshotBlockPublicAccess($args->toArray());
        return new EnableSnapshotBlockPublicAccessResponse($result->toArray());
    }
}
