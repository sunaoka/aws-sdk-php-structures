<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property list<ReservedCapacitySummary> $ReservedCapacitySummaries
 */
class TrainingPlanSummary extends Shape
{
    /**
     * @param array{
     *     TrainingPlanArn: string,
     *     TrainingPlanName: string,
     *     Status: 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed',
     *     StatusMessage?: string,
     *     DurationHours?: int,
     *     DurationMinutes?: int,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     UpfrontFee?: string,
     *     CurrencyCode?: string,
     *     TotalInstanceCount?: int,
     *     AvailableInstanceCount?: int,
     *     InUseInstanceCount?: int,
     *     TargetResources?: list<'training-job'|'hyperpod-cluster'>,
     *     ReservedCapacitySummaries?: list<ReservedCapacitySummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
