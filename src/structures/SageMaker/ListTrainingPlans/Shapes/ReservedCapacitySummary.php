<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedCapacityArn
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge' $InstanceType
 * @property int<0, max> $TotalInstanceCount
 * @property 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed' $Status
 * @property string|null $AvailabilityZone
 * @property int<0, 87600>|null $DurationHours
 * @property int<0, 59>|null $DurationMinutes
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class ReservedCapacitySummary extends Shape
{
    /**
     * @param array{
     *     ReservedCapacityArn: string,
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge',
     *     TotalInstanceCount: int<0, max>,
     *     Status: 'Pending'|'Active'|'Scheduled'|'Expired'|'Failed',
     *     AvailabilityZone?: string|null,
     *     DurationHours?: int<0, 87600>|null,
     *     DurationMinutes?: int<0, 59>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
