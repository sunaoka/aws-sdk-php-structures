<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AccountIds
 * @property list<'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_LOGS'|'KUBERNETES_AUDIT_LOGS'|'EC2_MALWARE_SCAN'>|null $DataSources
 * @property list<string>|null $Resources
 * @property list<'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'LAMBDA_NETWORK_LOGS'|'EKS_RUNTIME_MONITORING'|'FARGATE_RUNTIME_MONITORING'|'EC2_RUNTIME_MONITORING'|'RDS_DBI_PROTECTION_PROVISIONED'|'RDS_DBI_PROTECTION_SERVERLESS'>|null $Features
 */
class UsageCriteria extends Shape
{
    /**
     * @param array{
     *     AccountIds?: list<string>|null,
     *     DataSources?: list<'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_LOGS'|'KUBERNETES_AUDIT_LOGS'|'EC2_MALWARE_SCAN'>|null,
     *     Resources?: list<string>|null,
     *     Features?: list<'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'LAMBDA_NETWORK_LOGS'|'EKS_RUNTIME_MONITORING'|'FARGATE_RUNTIME_MONITORING'|'EC2_RUNTIME_MONITORING'|'RDS_DBI_PROTECTION_PROVISIONED'|'RDS_DBI_PROTECTION_SERVERLESS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
