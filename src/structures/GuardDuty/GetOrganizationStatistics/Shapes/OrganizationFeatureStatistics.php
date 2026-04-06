<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetOrganizationStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null $Name
 * @property int|null $EnabledAccountsCount
 * @property list<OrganizationFeatureStatisticsAdditionalConfiguration>|null $AdditionalConfiguration
 */
class OrganizationFeatureStatistics extends Shape
{
    /**
     * @param array{
     *     Name?: 'S3_DATA_EVENTS'|'EKS_AUDIT_LOGS'|'EBS_MALWARE_PROTECTION'|'RDS_LOGIN_EVENTS'|'EKS_RUNTIME_MONITORING'|'LAMBDA_NETWORK_LOGS'|'RUNTIME_MONITORING'|null,
     *     EnabledAccountsCount?: int|null,
     *     AdditionalConfiguration?: list<OrganizationFeatureStatisticsAdditionalConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
