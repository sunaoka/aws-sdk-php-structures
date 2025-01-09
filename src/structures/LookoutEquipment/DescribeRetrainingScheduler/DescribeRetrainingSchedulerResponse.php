<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeRetrainingScheduler;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property \Aws\Api\DateTimeResult $RetrainingStartDate
 * @property string $RetrainingFrequency
 * @property string $LookbackWindow
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 * @property 'MANAGED'|'MANUAL' $PromoteMode
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class DescribeRetrainingSchedulerResponse extends Response
{
}
