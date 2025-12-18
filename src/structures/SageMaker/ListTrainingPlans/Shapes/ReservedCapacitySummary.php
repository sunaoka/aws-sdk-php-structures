<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedCapacityArn
 * @property 'UltraServer'|'Instance'|null $ReservedCapacityType
 * @property string|null $UltraServerType
 * @property int<1, max>|null $UltraServerCount
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge'|'ml.p6e-gb200.36xlarge'|'ml.p5.4xlarge'|'ml.p6-b300.48xlarge' $InstanceType
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
     *     ReservedCapacityType?: 'UltraServer'|'Instance'|null,
     *     UltraServerType?: string|null,
     *     UltraServerCount?: int<1, max>|null,
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge'|'ml.p6e-gb200.36xlarge'|'ml.p5.4xlarge'|'ml.p6-b300.48xlarge',
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
