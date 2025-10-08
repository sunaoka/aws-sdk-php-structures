<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StopResourceSnapshotJob;

trait StopResourceSnapshotJobTrait
{
    /**
     * @param StopResourceSnapshotJobRequest $args
     * @return void
     */
    public function stopResourceSnapshotJob(StopResourceSnapshotJobRequest $args)
    {
        parent::stopResourceSnapshotJob($args->toArray());
    }
}
