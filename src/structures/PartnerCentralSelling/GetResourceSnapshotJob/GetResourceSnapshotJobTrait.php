<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshotJob;

trait GetResourceSnapshotJobTrait
{
    /**
     * @param GetResourceSnapshotJobRequest $args
     * @return GetResourceSnapshotJobResponse
     */
    public function getResourceSnapshotJob(GetResourceSnapshotJobRequest $args)
    {
        $result = parent::getResourceSnapshotJob($args->toArray());
        return new GetResourceSnapshotJobResponse($result->toArray());
    }
}
