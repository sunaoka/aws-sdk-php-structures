<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrainingPlanArn
 * @property string $TrainingPlanName
 * @property 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed' $Status
 * @property string|null $StatusMessage
 * @property int<0, 87600>|null $DurationHours
 * @property int<0, 59>|null $DurationMinutes
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $UpfrontFee
 * @property string|null $CurrencyCode
 * @property int<0, max>|null $TotalInstanceCount
 * @property int<0, max>|null $AvailableInstanceCount
 * @property int<0, max>|null $InUseInstanceCount
 * @property list<'training-job'|'hyperpod-cluster'>|null $TargetResources
 * @property list<Shapes\ReservedCapacitySummary>|null $ReservedCapacitySummaries
 */
class DescribeTrainingPlanResponse extends Response
{
}
