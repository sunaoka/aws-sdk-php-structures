<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASS'|'FAIL'|null $verdict
 * @property 'HIGH'|'MEDIUM'|'LOW'|null $confidence
 * @property string|null $deepLink
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELED'|null $status
 * @property string|null $summary
 */
class DevOpsAgentInvestigation extends Shape
{
    /**
     * @param array{
     *     verdict?: 'PASS'|'FAIL'|null,
     *     confidence?: 'HIGH'|'MEDIUM'|'LOW'|null,
     *     deepLink?: string|null,
     *     status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELED'|null,
     *     summary?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
