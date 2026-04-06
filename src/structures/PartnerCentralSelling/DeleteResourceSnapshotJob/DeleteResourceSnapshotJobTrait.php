<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\DeleteResourceSnapshotJob;

trait DeleteResourceSnapshotJobTrait
{
    /**
     * @param DeleteResourceSnapshotJobRequest $args
     * @return void
     */
    public function deleteResourceSnapshotJob(DeleteResourceSnapshotJobRequest $args)
    {
        parent::deleteResourceSnapshotJob($args->toArray());
    }
}
