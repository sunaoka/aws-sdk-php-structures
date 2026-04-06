<?php

namespace Sunaoka\Aws\Structures\SageMaker\SearchTrainingPlanOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingPlanExtensionOfferingId
 * @property string|null $AvailabilityZone
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property int<0, 4368>|null $DurationHours
 * @property string|null $UpfrontFee
 * @property string|null $CurrencyCode
 */
class TrainingPlanExtensionOffering extends Shape
{
    /**
     * @param array{
     *     TrainingPlanExtensionOfferingId: string,
     *     AvailabilityZone?: string|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     DurationHours?: int<0, 4368>|null,
     *     UpfrontFee?: string|null,
     *     CurrencyCode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
