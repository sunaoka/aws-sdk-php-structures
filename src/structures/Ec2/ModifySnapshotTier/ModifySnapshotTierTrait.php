<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySnapshotTier;

trait ModifySnapshotTierTrait
{
    /**
     * @param ModifySnapshotTierRequest $args
     * @return ModifySnapshotTierResponse
     */
    public function modifySnapshotTier(ModifySnapshotTierRequest $args)
    {
        $result = parent::modifySnapshotTier($args->toArray());
        return new ModifySnapshotTierResponse($result->toArray());
    }
}
