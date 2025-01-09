<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeDiscoveryJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $StorageSystemArn
 * @property string $DiscoveryJobArn
 * @property int<60, 44640> $CollectionDurationMinutes
 * @property 'RUNNING'|'WARNING'|'TERMINATED'|'FAILED'|'STOPPED'|'COMPLETED'|'COMPLETED_WITH_ISSUES' $Status
 * @property \Aws\Api\DateTimeResult $JobStartTime
 * @property \Aws\Api\DateTimeResult $JobEndTime
 */
class DescribeDiscoveryJobResponse extends Response
{
}
