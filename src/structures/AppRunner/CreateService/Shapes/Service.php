<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceName
 * @property string $ServiceId
 * @property string $ServiceArn
 * @property string $ServiceUrl
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property \Aws\Api\DateTimeResult $DeletedAt
 * @property 'CREATE_FAILED'|'RUNNING'|'DELETED'|'DELETE_FAILED'|'PAUSED'|'OPERATION_IN_PROGRESS' $Status
 * @property SourceConfiguration $SourceConfiguration
 * @property InstanceConfiguration $InstanceConfiguration
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property HealthCheckConfiguration $HealthCheckConfiguration
 * @property AutoScalingConfigurationSummary $AutoScalingConfigurationSummary
 * @property NetworkConfiguration $NetworkConfiguration
 * @property ServiceObservabilityConfiguration $ObservabilityConfiguration
 */
class Service extends Shape
{
    /**
     * @param array{
     *     ServiceName: string,
     *     ServiceId: string,
     *     ServiceArn: string,
     *     ServiceUrl?: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     DeletedAt?: \Aws\Api\DateTimeResult,
     *     Status: 'CREATE_FAILED'|'RUNNING'|'DELETED'|'DELETE_FAILED'|'PAUSED'|'OPERATION_IN_PROGRESS',
     *     SourceConfiguration: SourceConfiguration,
     *     InstanceConfiguration: InstanceConfiguration,
     *     EncryptionConfiguration?: EncryptionConfiguration,
     *     HealthCheckConfiguration?: HealthCheckConfiguration,
     *     AutoScalingConfigurationSummary: AutoScalingConfigurationSummary,
     *     NetworkConfiguration: NetworkConfiguration,
     *     ObservabilityConfiguration?: ServiceObservabilityConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
