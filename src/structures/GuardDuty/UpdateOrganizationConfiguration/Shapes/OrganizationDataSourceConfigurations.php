<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationS3LogsConfiguration|null $S3Logs
 * @property OrganizationKubernetesConfiguration|null $Kubernetes
 * @property OrganizationMalwareProtectionConfiguration|null $MalwareProtection
 */
class OrganizationDataSourceConfigurations extends Shape
{
    /**
     * @param array{
     *     S3Logs?: OrganizationS3LogsConfiguration|null,
     *     Kubernetes?: OrganizationKubernetesConfiguration|null,
     *     MalwareProtection?: OrganizationMalwareProtectionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
