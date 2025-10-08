<?php

namespace Sunaoka\Aws\Structures\DirectoryService\GetSnapshotLimits;

trait GetSnapshotLimitsTrait
{
    /**
     * @param GetSnapshotLimitsRequest $args
     * @return GetSnapshotLimitsResponse
     */
    public function getSnapshotLimits(GetSnapshotLimitsRequest $args)
    {
        $result = parent::getSnapshotLimits($args->toArray());
        return new GetSnapshotLimitsResponse($result->toArray());
    }
}
