<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartResourceSnapshotJob;

trait StartResourceSnapshotJobTrait
{
    /**
     * @param StartResourceSnapshotJobRequest $args
     * @return void
     */
    public function startResourceSnapshotJob(StartResourceSnapshotJobRequest $args)
    {
        parent::startResourceSnapshotJob($args->toArray());
    }
}
