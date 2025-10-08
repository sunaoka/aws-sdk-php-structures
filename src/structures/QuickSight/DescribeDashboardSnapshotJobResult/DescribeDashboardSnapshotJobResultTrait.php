<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult;

trait DescribeDashboardSnapshotJobResultTrait
{
    /**
     * @param DescribeDashboardSnapshotJobResultRequest $args
     * @return DescribeDashboardSnapshotJobResultResponse
     */
    public function describeDashboardSnapshotJobResult(DescribeDashboardSnapshotJobResultRequest $args)
    {
        $result = parent::describeDashboardSnapshotJobResult($args->toArray());
        return new DescribeDashboardSnapshotJobResultResponse($result->toArray());
    }
}
