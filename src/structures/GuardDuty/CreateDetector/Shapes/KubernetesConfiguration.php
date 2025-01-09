<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KubernetesAuditLogsConfiguration $AuditLogs
 */
class KubernetesConfiguration extends Shape
{
    /**
     * @param array{AuditLogs: KubernetesAuditLogsConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
