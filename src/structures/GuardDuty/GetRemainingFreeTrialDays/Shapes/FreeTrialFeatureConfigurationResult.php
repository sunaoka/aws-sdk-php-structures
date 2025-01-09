<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'FARGATE_RUNTIME_MONITORING'|'EC2_RUNTIME_MONITORING' $Name
 * @property int $FreeTrialDaysRemaining
 */
class FreeTrialFeatureConfigurationResult extends Shape
{
    /**
     * @param array{
     *     Name?: 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'FARGATE_RUNTIME_MONITORING'|'EC2_RUNTIME_MONITORING',
     *     FreeTrialDaysRemaining?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
