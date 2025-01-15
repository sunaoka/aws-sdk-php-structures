<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSourceFreeTrial|null $AuditLogs
 */
class KubernetesDataSourceFreeTrial extends Shape
{
    /**
     * @param array{AuditLogs?: DataSourceFreeTrial|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
