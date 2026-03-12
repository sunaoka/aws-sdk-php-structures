<?php

namespace Sunaoka\Aws\Structures\SageMaker\ExtendTrainingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingPlanExtensionOfferingId
 * @property \Aws\Api\DateTimeResult|null $ExtendedAt
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property string|null $Status
 * @property string|null $PaymentStatus
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property int<0, 4368>|null $DurationHours
 * @property string|null $UpfrontFee
 * @property string|null $CurrencyCode
 */
class TrainingPlanExtension extends Shape
{
    /**
     * @param array{
     *     TrainingPlanExtensionOfferingId: string,
     *     ExtendedAt?: \Aws\Api\DateTimeResult|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null,
     *     PaymentStatus?: string|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
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
