<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'LAMBDA_NETWORK_LOGS'|'EKS_RUNTIME_MONITORING'|'FARGATE_RUNTIME_MONITORING'|'EC2_RUNTIME_MONITORING'|'RDS_DBI_PROTECTION_PROVISIONED'|'RDS_DBI_PROTECTION_SERVERLESS'|null $Feature
 * @property Total|null $Total
 */
class UsageFeatureResult extends Shape
{
    /**
     * @param array{
     *     Feature?: 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'LAMBDA_NETWORK_LOGS'|'EKS_RUNTIME_MONITORING'|'FARGATE_RUNTIME_MONITORING'|'EC2_RUNTIME_MONITORING'|'RDS_DBI_PROTECTION_PROVISIONED'|'RDS_DBI_PROTECTION_SERVERLESS'|null,
     *     Total?: Total|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
