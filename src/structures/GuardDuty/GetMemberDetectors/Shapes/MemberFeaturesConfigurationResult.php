<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null $Name
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property list<MemberAdditionalConfigurationResult>|null $AdditionalConfiguration
 */
class MemberFeaturesConfigurationResult extends Shape
{
    /**
     * @param array{
     *     Name?: 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     AdditionalConfiguration?: list<MemberAdditionalConfigurationResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
