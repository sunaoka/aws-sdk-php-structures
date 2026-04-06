<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeReservedCapacity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReservedCapacityArn
 * @property 'UltraServer'|'Instance'|null $ReservedCapacityType
 * @property 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed'|null $Status
 * @property string|null $AvailabilityZone
 * @property int<0, 87600>|null $DurationHours
 * @property int<0, 59>|null $DurationMinutes
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge'|'ml.p6e-gb200.36xlarge'|'ml.p5.4xlarge'|'ml.p6-b300.48xlarge' $InstanceType
 * @property int<0, max> $TotalInstanceCount
 * @property int<0, max>|null $AvailableInstanceCount
 * @property int<0, max>|null $InUseInstanceCount
 * @property Shapes\UltraServerSummary|null $UltraServerSummary
 */
class DescribeReservedCapacityResponse extends Response
{
}
