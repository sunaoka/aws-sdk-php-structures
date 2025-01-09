<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSourceFreeTrial $AuditLogs
 */
class KubernetesDataSourceFreeTrial extends Shape
{
    /**
     * @param array{AuditLogs?: DataSourceFreeTrial} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
