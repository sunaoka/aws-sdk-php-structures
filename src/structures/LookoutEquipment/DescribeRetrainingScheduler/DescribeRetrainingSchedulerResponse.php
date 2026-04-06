<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeRetrainingScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property \Aws\Api\DateTimeResult|null $RetrainingStartDate
 * @property string|null $RetrainingFrequency
 * @property string|null $LookbackWindow
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 * @property 'MANAGED'|'MANUAL'|null $PromoteMode
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class DescribeRetrainingSchedulerResponse extends Response
{
}
