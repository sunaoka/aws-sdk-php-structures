<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeDiscoveryJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $StorageSystemArn
 * @property string|null $DiscoveryJobArn
 * @property int<60, 44640>|null $CollectionDurationMinutes
 * @property 'RUNNING'|'WARNING'|'TERMINATED'|'FAILED'|'STOPPED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|null $Status
 * @property \Aws\Api\DateTimeResult|null $JobStartTime
 * @property \Aws\Api\DateTimeResult|null $JobEndTime
 */
class DescribeDiscoveryJobResponse extends Response
{
}
