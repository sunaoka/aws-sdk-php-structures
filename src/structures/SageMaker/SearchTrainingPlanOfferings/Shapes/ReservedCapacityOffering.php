<?php

namespace Sunaoka\Aws\Structures\SageMaker\SearchTrainingPlanOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge' $InstanceType
 * @property int $InstanceCount
 * @property string $AvailabilityZone
 * @property int $DurationHours
 * @property int $DurationMinutes
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class ReservedCapacityOffering extends Shape
{
    /**
     * @param array{
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge',
     *     InstanceCount: int,
     *     AvailabilityZone?: string,
     *     DurationHours?: int,
     *     DurationMinutes?: int,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
