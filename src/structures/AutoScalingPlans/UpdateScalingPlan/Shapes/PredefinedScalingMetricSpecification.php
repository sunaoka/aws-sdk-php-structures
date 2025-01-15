<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\UpdateScalingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASGAverageCPUUtilization'|'ASGAverageNetworkIn'|'ASGAverageNetworkOut'|'DynamoDBReadCapacityUtilization'|'DynamoDBWriteCapacityUtilization'|'ECSServiceAverageCPUUtilization'|'ECSServiceAverageMemoryUtilization'|'ALBRequestCountPerTarget'|'RDSReaderAverageCPUUtilization'|'RDSReaderAverageDatabaseConnections'|'EC2SpotFleetRequestAverageCPUUtilization'|'EC2SpotFleetRequestAverageNetworkIn'|'EC2SpotFleetRequestAverageNetworkOut' $PredefinedScalingMetricType
 * @property string|null $ResourceLabel
 */
class PredefinedScalingMetricSpecification extends Shape
{
    /**
     * @param array{
     *     PredefinedScalingMetricType: 'ASGAverageCPUUtilization'|'ASGAverageNetworkIn'|'ASGAverageNetworkOut'|'DynamoDBReadCapacityUtilization'|'DynamoDBWriteCapacityUtilization'|'ECSServiceAverageCPUUtilization'|'ECSServiceAverageMemoryUtilization'|'ALBRequestCountPerTarget'|'RDSReaderAverageCPUUtilization'|'RDSReaderAverageDatabaseConnections'|'EC2SpotFleetRequestAverageCPUUtilization'|'EC2SpotFleetRequestAverageNetworkIn'|'EC2SpotFleetRequestAverageNetworkOut',
     *     ResourceLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
