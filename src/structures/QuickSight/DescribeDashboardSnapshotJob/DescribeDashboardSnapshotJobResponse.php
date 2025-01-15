<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AwsAccountId
 * @property string|null $DashboardId
 * @property string|null $SnapshotJobId
 * @property Shapes\SnapshotUserConfigurationRedacted|null $UserConfiguration
 * @property Shapes\SnapshotConfiguration|null $SnapshotConfiguration
 * @property string|null $Arn
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|null $JobStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeDashboardSnapshotJobResponse extends Response
{
}
