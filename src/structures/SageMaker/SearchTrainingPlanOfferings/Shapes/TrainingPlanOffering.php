<?php

namespace Sunaoka\Aws\Structures\SageMaker\SearchTrainingPlanOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingPlanOfferingId
 * @property list<'training-job'|'hyperpod-cluster'> $TargetResources
 * @property \Aws\Api\DateTimeResult|null $RequestedStartTimeAfter
 * @property \Aws\Api\DateTimeResult|null $RequestedEndTimeBefore
 * @property int<0, 87600>|null $DurationHours
 * @property int<0, 59>|null $DurationMinutes
 * @property string|null $UpfrontFee
 * @property string|null $CurrencyCode
 * @property list<ReservedCapacityOffering>|null $ReservedCapacityOfferings
 */
class TrainingPlanOffering extends Shape
{
    /**
     * @param array{
     *     TrainingPlanOfferingId: string,
     *     TargetResources: list<'training-job'|'hyperpod-cluster'>,
     *     RequestedStartTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     RequestedEndTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     DurationHours?: int<0, 87600>|null,
     *     DurationMinutes?: int<0, 59>|null,
     *     UpfrontFee?: string|null,
     *     CurrencyCode?: string|null,
     *     ReservedCapacityOfferings?: list<ReservedCapacityOffering>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
