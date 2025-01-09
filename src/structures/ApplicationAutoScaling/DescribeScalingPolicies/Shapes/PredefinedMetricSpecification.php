<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DynamoDBReadCapacityUtilization'|'DynamoDBWriteCapacityUtilization'|'ALBRequestCountPerTarget'|'RDSReaderAverageCPUUtilization'|'RDSReaderAverageDatabaseConnections'|'EC2SpotFleetRequestAverageCPUUtilization'|'EC2SpotFleetRequestAverageNetworkIn'|'EC2SpotFleetRequestAverageNetworkOut'|'SageMakerVariantInvocationsPerInstance'|'ECSServiceAverageCPUUtilization'|'ECSServiceAverageMemoryUtilization'|'AppStreamAverageCapacityUtilization'|'ComprehendInferenceUtilization'|'LambdaProvisionedConcurrencyUtilization'|'CassandraReadCapacityUtilization'|'CassandraWriteCapacityUtilization'|'KafkaBrokerStorageUtilization'|'ElastiCachePrimaryEngineCPUUtilization'|'ElastiCacheReplicaEngineCPUUtilization'|'ElastiCacheDatabaseMemoryUsageCountedForEvictPercentage'|'NeptuneReaderAverageCPUUtilization'|'SageMakerVariantProvisionedConcurrencyUtilization'|'ElastiCacheDatabaseCapacityUsageCountedForEvictPercentage'|'SageMakerInferenceComponentInvocationsPerCopy'|'WorkSpacesAverageUserSessionsCapacityUtilization'|'SageMakerInferenceComponentConcurrentRequestsPerCopyHighResolution'|'SageMakerVariantConcurrentRequestsPerModelHighResolution' $PredefinedMetricType
 * @property string $ResourceLabel
 */
class PredefinedMetricSpecification extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricType: 'DynamoDBReadCapacityUtilization'|'DynamoDBWriteCapacityUtilization'|'ALBRequestCountPerTarget'|'RDSReaderAverageCPUUtilization'|'RDSReaderAverageDatabaseConnections'|'EC2SpotFleetRequestAverageCPUUtilization'|'EC2SpotFleetRequestAverageNetworkIn'|'EC2SpotFleetRequestAverageNetworkOut'|'SageMakerVariantInvocationsPerInstance'|'ECSServiceAverageCPUUtilization'|'ECSServiceAverageMemoryUtilization'|'AppStreamAverageCapacityUtilization'|'ComprehendInferenceUtilization'|'LambdaProvisionedConcurrencyUtilization'|'CassandraReadCapacityUtilization'|'CassandraWriteCapacityUtilization'|'KafkaBrokerStorageUtilization'|'ElastiCachePrimaryEngineCPUUtilization'|'ElastiCacheReplicaEngineCPUUtilization'|'ElastiCacheDatabaseMemoryUsageCountedForEvictPercentage'|'NeptuneReaderAverageCPUUtilization'|'SageMakerVariantProvisionedConcurrencyUtilization'|'ElastiCacheDatabaseCapacityUsageCountedForEvictPercentage'|'SageMakerInferenceComponentInvocationsPerCopy'|'WorkSpacesAverageUserSessionsCapacityUtilization'|'SageMakerInferenceComponentConcurrentRequestsPerCopyHighResolution'|'SageMakerVariantConcurrentRequestsPerModelHighResolution',
     *     ResourceLabel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
