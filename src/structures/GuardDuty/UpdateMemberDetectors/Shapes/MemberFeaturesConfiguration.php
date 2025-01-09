<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING' $Name
 * @property 'ENABLED'|'DISABLED' $Status
 * @property list<MemberAdditionalConfiguration> $AdditionalConfiguration
 */
class MemberFeaturesConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING',
     *     Status?: 'ENABLED'|'DISABLED',
     *     AdditionalConfiguration?: list<MemberAdditionalConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
