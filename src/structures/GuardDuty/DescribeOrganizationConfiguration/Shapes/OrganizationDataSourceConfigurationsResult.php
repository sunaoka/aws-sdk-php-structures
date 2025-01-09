<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationS3LogsConfigurationResult $S3Logs
 * @property OrganizationKubernetesConfigurationResult $Kubernetes
 * @property OrganizationMalwareProtectionConfigurationResult $MalwareProtection
 */
class OrganizationDataSourceConfigurationsResult extends Shape
{
    /**
     * @param array{
     *     S3Logs: OrganizationS3LogsConfigurationResult,
     *     Kubernetes?: OrganizationKubernetesConfigurationResult,
     *     MalwareProtection?: OrganizationMalwareProtectionConfigurationResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
