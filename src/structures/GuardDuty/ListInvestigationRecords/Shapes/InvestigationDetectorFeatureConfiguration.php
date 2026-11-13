<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLOUD_TRAIL'|'DNS_LOGS'|'FLOW_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'EKS_ADDON_MANAGEMENT'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'|null $Name
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class InvestigationDetectorFeatureConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: 'CLOUD_TRAIL'|'DNS_LOGS'|'FLOW_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'EKS_ADDON_MANAGEMENT'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
