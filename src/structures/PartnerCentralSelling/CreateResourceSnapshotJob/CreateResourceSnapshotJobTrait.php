<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateResourceSnapshotJob;

trait CreateResourceSnapshotJobTrait
{
    /**
     * @param CreateResourceSnapshotJobRequest $args
     * @return CreateResourceSnapshotJobResponse
     */
    public function createResourceSnapshotJob(CreateResourceSnapshotJobRequest $args)
    {
        $result = parent::createResourceSnapshotJob($args->toArray());
        return new CreateResourceSnapshotJobResponse($result->toArray());
    }
}
