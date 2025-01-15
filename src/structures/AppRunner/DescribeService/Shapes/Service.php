<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceName
 * @property string $ServiceId
 * @property string $ServiceArn
 * @property string|null $ServiceUrl
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $DeletedAt
 * @property 'CREATE_FAILED'|'RUNNING'|'DELETED'|'DELETE_FAILED'|'PAUSED'|'OPERATION_IN_PROGRESS' $Status
 * @property SourceConfiguration $SourceConfiguration
 * @property InstanceConfiguration $InstanceConfiguration
 * @property EncryptionConfiguration|null $EncryptionConfiguration
 * @property HealthCheckConfiguration|null $HealthCheckConfiguration
 * @property AutoScalingConfigurationSummary $AutoScalingConfigurationSummary
 * @property NetworkConfiguration $NetworkConfiguration
 * @property ServiceObservabilityConfiguration|null $ObservabilityConfiguration
 */
class Service extends Shape
{
    /**
     * @param array{
     *     ServiceName: string,
     *     ServiceId: string,
     *     ServiceArn: string,
     *     ServiceUrl?: string|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     DeletedAt?: \Aws\Api\DateTimeResult|null,
     *     Status: 'CREATE_FAILED'|'RUNNING'|'DELETED'|'DELETE_FAILED'|'PAUSED'|'OPERATION_IN_PROGRESS',
     *     SourceConfiguration: SourceConfiguration,
     *     InstanceConfiguration: InstanceConfiguration,
     *     EncryptionConfiguration?: EncryptionConfiguration|null,
     *     HealthCheckConfiguration?: HealthCheckConfiguration|null,
     *     AutoScalingConfigurationSummary: AutoScalingConfigurationSummary,
     *     NetworkConfiguration: NetworkConfiguration,
     *     ObservabilityConfiguration?: ServiceObservabilityConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
