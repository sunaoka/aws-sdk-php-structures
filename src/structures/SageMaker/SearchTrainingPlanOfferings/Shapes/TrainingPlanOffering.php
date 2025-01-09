<?php

namespace Sunaoka\Aws\Structures\SageMaker\SearchTrainingPlanOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingPlanOfferingId
 * @property list<'training-job'|'hyperpod-cluster'> $TargetResources
 * @property \Aws\Api\DateTimeResult $RequestedStartTimeAfter
 * @property \Aws\Api\DateTimeResult $RequestedEndTimeBefore
 * @property int<0, 87600> $DurationHours
 * @property int<0, 59> $DurationMinutes
 * @property string $UpfrontFee
 * @property string $CurrencyCode
 * @property list<ReservedCapacityOffering> $ReservedCapacityOfferings
 */
class TrainingPlanOffering extends Shape
{
    /**
     * @param array{
     *     TrainingPlanOfferingId: string,
     *     TargetResources: list<'training-job'|'hyperpod-cluster'>,
     *     RequestedStartTimeAfter?: \Aws\Api\DateTimeResult,
     *     RequestedEndTimeBefore?: \Aws\Api\DateTimeResult,
     *     DurationHours?: int<0, 87600>,
     *     DurationMinutes?: int<0, 59>,
     *     UpfrontFee?: string,
     *     CurrencyCode?: string,
     *     ReservedCapacityOfferings?: list<ReservedCapacityOffering>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
