<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AccountIds
 * @property list<'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_LOGS'|'KUBERNETES_AUDIT_LOGS'|'EC2_MALWARE_SCAN'> $DataSources
 * @property list<string> $Resources
 * @property list<'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'LAMBDA_NETWORK_LOGS'|'EKS_RUNTIME_MONITORING'|'FARGATE_RUNTIME_MONITORING'|'EC2_RUNTIME_MONITORING'|'RDS_DBI_PROTECTION_PROVISIONED'|'RDS_DBI_PROTECTION_SERVERLESS'> $Features
 */
class UsageCriteria extends Shape
{
    /**
     * @param array{
     *     AccountIds?: list<string>,
     *     DataSources?: list<'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_LOGS'|'KUBERNETES_AUDIT_LOGS'|'EC2_MALWARE_SCAN'>,
     *     Resources?: list<string>,
     *     Features?: list<'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'LAMBDA_NETWORK_LOGS'|'EKS_RUNTIME_MONITORING'|'FARGATE_RUNTIME_MONITORING'|'EC2_RUNTIME_MONITORING'|'RDS_DBI_PROTECTION_PROVISIONED'|'RDS_DBI_PROTECTION_SERVERLESS'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
