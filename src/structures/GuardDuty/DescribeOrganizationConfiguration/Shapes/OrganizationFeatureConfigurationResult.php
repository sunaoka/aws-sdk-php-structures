<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null $Name
 * @property 'NEW'|'NONE'|'ALL'|null $AutoEnable
 * @property list<OrganizationAdditionalConfigurationResult>|null $AdditionalConfiguration
 */
class OrganizationFeatureConfigurationResult extends Shape
{
    /**
     * @param array{
     *     Name?: 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null,
     *     AutoEnable?: 'NEW'|'NONE'|'ALL'|null,
     *     AdditionalConfiguration?: list<OrganizationAdditionalConfigurationResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
