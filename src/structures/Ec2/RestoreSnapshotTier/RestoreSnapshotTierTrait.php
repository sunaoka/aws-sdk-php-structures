<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotTier;

trait RestoreSnapshotTierTrait
{
    /**
     * @param RestoreSnapshotTierRequest $args
     * @return RestoreSnapshotTierResponse
     */
    public function restoreSnapshotTier(RestoreSnapshotTierRequest $args)
    {
        $result = parent::restoreSnapshotTier($args->toArray());
        return new RestoreSnapshotTierResponse($result->toArray());
    }
}
