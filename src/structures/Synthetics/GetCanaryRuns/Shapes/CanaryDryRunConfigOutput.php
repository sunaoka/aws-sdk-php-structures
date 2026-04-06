<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanaryRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DryRunId
 */
class CanaryDryRunConfigOutput extends Shape
{
    /**
     * @param array{DryRunId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
