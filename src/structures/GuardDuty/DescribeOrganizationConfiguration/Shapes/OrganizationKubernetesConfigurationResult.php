<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrganizationKubernetesAuditLogsConfigurationResult $AuditLogs
 */
class OrganizationKubernetesConfigurationResult extends Shape
{
    /**
     * @param array{AuditLogs: OrganizationKubernetesAuditLogsConfigurationResult} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
