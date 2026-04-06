<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJobSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property string $ScheduleId
 */
class StartDashboardSnapshotJobScheduleRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     ScheduleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
