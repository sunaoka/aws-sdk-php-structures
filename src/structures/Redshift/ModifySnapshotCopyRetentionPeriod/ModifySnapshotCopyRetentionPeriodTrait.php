<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifySnapshotCopyRetentionPeriod;

trait ModifySnapshotCopyRetentionPeriodTrait
{
    /**
     * @param ModifySnapshotCopyRetentionPeriodRequest $args
     * @return ModifySnapshotCopyRetentionPeriodResponse
     */
    public function modifySnapshotCopyRetentionPeriod(ModifySnapshotCopyRetentionPeriodRequest $args)
    {
        $result = parent::modifySnapshotCopyRetentionPeriod($args->toArray());
        return new ModifySnapshotCopyRetentionPeriodResponse($result->toArray());
    }
}
