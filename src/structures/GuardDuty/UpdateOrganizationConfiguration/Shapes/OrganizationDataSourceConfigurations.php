<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationS3LogsConfiguration $S3Logs
 * @property OrganizationKubernetesConfiguration $Kubernetes
 * @property OrganizationMalwareProtectionConfiguration $MalwareProtection
 */
class OrganizationDataSourceConfigurations extends Shape
{
    /**
     * @param array{
     *     S3Logs?: OrganizationS3LogsConfiguration,
     *     Kubernetes?: OrganizationKubernetesConfiguration,
     *     MalwareProtection?: OrganizationMalwareProtectionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
