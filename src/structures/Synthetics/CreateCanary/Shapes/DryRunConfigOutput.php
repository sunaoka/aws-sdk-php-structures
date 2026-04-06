<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DryRunId
 * @property string|null $LastDryRunExecutionStatus
 */
class DryRunConfigOutput extends Shape
{
    /**
     * @param array{
     *     DryRunId?: string|null,
     *     LastDryRunExecutionStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
