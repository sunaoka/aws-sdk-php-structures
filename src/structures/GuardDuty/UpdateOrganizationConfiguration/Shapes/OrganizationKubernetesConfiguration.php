<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationKubernetesAuditLogsConfiguration $AuditLogs
 */
class OrganizationKubernetesConfiguration extends Shape
{
    /**
     * @param array{AuditLogs: OrganizationKubernetesAuditLogsConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
