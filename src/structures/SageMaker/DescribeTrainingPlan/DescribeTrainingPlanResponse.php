<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrainingPlanArn
 * @property string $TrainingPlanName
 * @property 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed' $Status
 * @property string $StatusMessage
 * @property int $DurationHours
 * @property int $DurationMinutes
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $UpfrontFee
 * @property string $CurrencyCode
 * @property int $TotalInstanceCount
 * @property int $AvailableInstanceCount
 * @property int $InUseInstanceCount
 * @property list<'training-job'|'hyperpod-cluster'> $TargetResources
 * @property list<Shapes\ReservedCapacitySummary> $ReservedCapacitySummaries
 */
class DescribeTrainingPlanResponse extends Response
{
}
