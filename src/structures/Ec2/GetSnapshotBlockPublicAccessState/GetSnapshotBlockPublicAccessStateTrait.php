<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSnapshotBlockPublicAccessState;

trait GetSnapshotBlockPublicAccessStateTrait
{
    /**
     * @param GetSnapshotBlockPublicAccessStateRequest $args
     * @return GetSnapshotBlockPublicAccessStateResponse
     */
    public function getSnapshotBlockPublicAccessState(GetSnapshotBlockPublicAccessStateRequest $args)
    {
        $result = parent::getSnapshotBlockPublicAccessState($args->toArray());
        return new GetSnapshotBlockPublicAccessStateResponse($result->toArray());
    }
}
