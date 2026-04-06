<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property string $SnapshotJobId
 * @property Shapes\SnapshotUserConfiguration $UserConfiguration
 * @property Shapes\SnapshotConfiguration $SnapshotConfiguration
 */
class StartDashboardSnapshotJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     SnapshotJobId: string,
     *     UserConfiguration: Shapes\SnapshotUserConfiguration,
     *     SnapshotConfiguration: Shapes\SnapshotConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
