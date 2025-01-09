<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property string $SnapshotJobId
 * @property Shapes\SnapshotUserConfigurationRedacted $UserConfiguration
 * @property Shapes\SnapshotConfiguration $SnapshotConfiguration
 * @property string $Arn
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $RequestId
 * @property int $Status
 */
class DescribeDashboardSnapshotJobResponse extends Response
{
}
