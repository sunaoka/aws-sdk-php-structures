<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListWorkloads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property string $workloadName
 */
class WorkloadDataSummary extends Shape
{
    /**
     * @param array{
     *     displayName?: string,
     *     workloadName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
