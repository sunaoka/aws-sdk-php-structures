<?php

namespace Sunaoka\Aws\Structures\SageMaker\SearchTrainingPlanOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge' $InstanceType
 * @property int<1, 256> $InstanceCount
 * @property string $AvailabilityZone
 * @property int<0, 87600> $DurationHours
 * @property int<0, 59> $DurationMinutes
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class ReservedCapacityOffering extends Shape
{
    /**
     * @param array{
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge',
     *     InstanceCount: int<1, 256>,
     *     AvailabilityZone?: string,
     *     DurationHours?: int<0, 87600>,
     *     DurationMinutes?: int<0, 59>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
