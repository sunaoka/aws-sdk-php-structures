<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListWorkloads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $workloadName
 * @property string|null $displayName
 * @property 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null $status
 */
class WorkloadDataSummary extends Shape
{
    /**
     * @param array{
     *     workloadName?: string|null,
     *     displayName?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
