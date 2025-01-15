<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCellReadinessSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED'|null $Readiness
 * @property string|null $ReadinessCheckName
 */
class ReadinessCheckSummary extends Shape
{
    /**
     * @param array{
     *     Readiness?: 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED'|null,
     *     ReadinessCheckName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
