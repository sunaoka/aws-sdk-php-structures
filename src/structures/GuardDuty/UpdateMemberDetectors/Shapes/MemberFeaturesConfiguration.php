<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null $Name
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property list<MemberAdditionalConfiguration>|null $AdditionalConfiguration
 */
class MemberFeaturesConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     AdditionalConfiguration?: list<MemberAdditionalConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
