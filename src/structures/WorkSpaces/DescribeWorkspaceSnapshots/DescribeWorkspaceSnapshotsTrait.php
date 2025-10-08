<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceSnapshots;

trait DescribeWorkspaceSnapshotsTrait
{
    /**
     * @param DescribeWorkspaceSnapshotsRequest $args
     * @return DescribeWorkspaceSnapshotsResponse
     */
    public function describeWorkspaceSnapshots(DescribeWorkspaceSnapshotsRequest $args)
    {
        $result = parent::describeWorkspaceSnapshots($args->toArray());
        return new DescribeWorkspaceSnapshotsResponse($result->toArray());
    }
}
