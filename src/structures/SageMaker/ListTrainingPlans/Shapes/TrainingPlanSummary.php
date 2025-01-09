<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
     *     DurationHours?: int<0, 87600>,
     *     DurationMinutes?: int<0, 59>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     UpfrontFee?: string,
     *     CurrencyCode?: string,
     *     TotalInstanceCount?: int<0, max>,
     *     AvailableInstanceCount?: int<0, max>,
     *     InUseInstanceCount?: int<0, max>,
     *     TargetResources?: list<'training-job'|'hyperpod-cluster'>,
     *     ReservedCapacitySummaries?: list<ReservedCapacitySummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
