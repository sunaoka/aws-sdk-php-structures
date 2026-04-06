<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteOptimizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptimizationJobName
 */
class DeleteOptimizationJobRequest extends Request
{
    /**
     * @param array{OptimizationJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
