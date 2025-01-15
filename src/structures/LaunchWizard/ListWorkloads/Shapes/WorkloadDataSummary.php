<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListWorkloads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $displayName
 * @property string|null $workloadName
 */
class WorkloadDataSummary extends Shape
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     workloadName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
