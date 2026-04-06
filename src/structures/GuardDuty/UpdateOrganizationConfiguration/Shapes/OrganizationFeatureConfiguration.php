<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null $Name
 * @property 'NEW'|'NONE'|'ALL'|null $AutoEnable
 * @property list<OrganizationAdditionalConfiguration>|null $AdditionalConfiguration
 */
class OrganizationFeatureConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null,
     *     AutoEnable?: 'NEW'|'NONE'|'ALL'|null,
     *     AdditionalConfiguration?: list<OrganizationAdditionalConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
