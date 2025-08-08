<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property int<1, max>|null $TotalUltraServerCount
 * @property list<'training-job'|'hyperpod-cluster'>|null $TargetResources
 * @property list<ReservedCapacitySummary>|null $ReservedCapacitySummaries
 */
class TrainingPlanSummary extends Shape
{
    /**
     * @param array{
     *     TrainingPlanArn: string,
     *     TrainingPlanName: string,
     *     Status: 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed',
     *     StatusMessage?: string|null,
     *     DurationHours?: int<0, 87600>|null,
     *     DurationMinutes?: int<0, 59>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     UpfrontFee?: string|null,
     *     CurrencyCode?: string|null,
     *     TotalInstanceCount?: int<0, max>|null,
     *     AvailableInstanceCount?: int<0, max>|null,
     *     InUseInstanceCount?: int<0, max>|null,
     *     TotalUltraServerCount?: int<1, max>|null,
     *     TargetResources?: list<'training-job'|'hyperpod-cluster'>|null,
     *     ReservedCapacitySummaries?: list<ReservedCapacitySummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
