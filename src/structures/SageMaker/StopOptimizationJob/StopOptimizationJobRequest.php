<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopOptimizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptimizationJobName
 */
class StopOptimizationJobRequest extends Request
{
    /**
     * @param array{OptimizationJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
