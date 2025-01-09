<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrainingPlanArn
 * @property string $TrainingPlanName
 * @property 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed' $Status
 * @property string $StatusMessage
 * @property int<0, 87600> $DurationHours
 * @property int<0, 59> $DurationMinutes
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $UpfrontFee
 * @property string $CurrencyCode
 * @property int<0, max> $TotalInstanceCount
 * @property int<0, max> $AvailableInstanceCount
 * @property int<0, max> $InUseInstanceCount
 * @property list<'training-job'|'hyperpod-cluster'> $TargetResources
 * @property list<Shapes\ReservedCapacitySummary> $ReservedCapacitySummaries
 */
class DescribeTrainingPlanResponse extends Response
{
}
