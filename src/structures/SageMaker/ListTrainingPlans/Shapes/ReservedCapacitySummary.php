<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedCapacityArn
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge' $InstanceType
 * @property int $TotalInstanceCount
 * @property 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed' $Status
 * @property string $AvailabilityZone
 * @property int $DurationHours
 * @property int $DurationMinutes
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class ReservedCapacitySummary extends Shape
{
    /**
     * @param array{
     *     ReservedCapacityArn: string,
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge',
     *     TotalInstanceCount: int,
     *     Status: 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed',
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
