<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProtectionPlan>|null $ProtectionPlans
 * @property list<'CLOUD_TRAIL'|'DNS_LOGS'|'FLOW_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'EKS_ADDON_MANAGEMENT'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'>|null $FoundationalDataSources
 * @property string|null $CoverageGaps
 * @property string|null $KeyObservation
 */
class DetectionCoverage extends Shape
{
    /**
     * @param array{
     *     ProtectionPlans?: list<ProtectionPlan>|null,
     *     FoundationalDataSources?: list<'CLOUD_TRAIL'|'DNS_LOGS'|'FLOW_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'EKS_ADDON_MANAGEMENT'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|'ECS_FARGATE_AGENT_MANAGEMENT'|'EC2_AGENT_MANAGEMENT'>|null,
     *     CoverageGaps?: string|null,
     *     KeyObservation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
