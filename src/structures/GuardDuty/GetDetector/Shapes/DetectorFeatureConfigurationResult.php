<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null $Name
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property list<DetectorAdditionalConfigurationResult>|null $AdditionalConfiguration
 */
class DetectorFeatureConfigurationResult extends Shape
{
    /**
     * @param array{
     *     Name?: 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     AdditionalConfiguration?: list<DetectorAdditionalConfigurationResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
