<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KubernetesAuditLogsConfigurationResult $AuditLogs
 */
class KubernetesConfigurationResult extends Shape
{
    /**
     * @param array{AuditLogs: KubernetesAuditLogsConfigurationResult} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
