<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationS3LogsConfigurationResult $S3Logs
 * @property OrganizationKubernetesConfigurationResult|null $Kubernetes
 * @property OrganizationMalwareProtectionConfigurationResult|null $MalwareProtection
 */
class OrganizationDataSourceConfigurationsResult extends Shape
{
    /**
     * @param array{
     *     S3Logs: OrganizationS3LogsConfigurationResult,
     *     Kubernetes?: OrganizationKubernetesConfigurationResult|null,
     *     MalwareProtection?: OrganizationMalwareProtectionConfigurationResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
