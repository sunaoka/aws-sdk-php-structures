<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HealthCheckSourceId
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETED'|'CREATE_FAILED'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETED'|'DELETE_FAILED' $HealthCheckSourceStatus
 * @property HealthCheckSourceConfig $HealthCheckSourceConfig
 * @property 'INSUFFICIENT_SUBNET_IPS'|'EC2_LIMIT_EXCEEDED'|'INVALID_SUBNET'|'INVALID_SECURITY_GROUP'|'INVALID_CONFIGURATION'|'SLR_MISSING_OR_NOT_ASSUMABLE'|'INTERNAL_ERROR'|null $StatusReasonCode
 * @property string|null $StatusReason
 */
class HealthCheckSource extends Shape
{
    /**
     * @param array{
     *     HealthCheckSourceId: string,
     *     HealthCheckSourceStatus: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETED'|'CREATE_FAILED'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETED'|'DELETE_FAILED',
     *     HealthCheckSourceConfig: HealthCheckSourceConfig,
     *     StatusReasonCode?: 'INSUFFICIENT_SUBNET_IPS'|'EC2_LIMIT_EXCEEDED'|'INVALID_SUBNET'|'INVALID_SECURITY_GROUP'|'INVALID_CONFIGURATION'|'SLR_MISSING_OR_NOT_ASSUMABLE'|'INTERNAL_ERROR'|null,
     *     StatusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
