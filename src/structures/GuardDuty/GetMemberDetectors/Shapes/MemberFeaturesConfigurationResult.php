<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING' $Name
 * @property 'ENABLED'|'DISABLED' $Status
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<MemberAdditionalConfigurationResult> $AdditionalConfiguration
 */
class MemberFeaturesConfigurationResult extends Shape
{
    /**
     * @param array{
     *     Name?: 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING',
     *     Status?: 'ENABLED'|'DISABLED',
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     AdditionalConfiguration?: list<MemberAdditionalConfigurationResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
