<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeOptimizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptimizationJobName
 */
class DescribeOptimizationJobRequest extends Request
{
    /**
     * @param array{OptimizationJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
