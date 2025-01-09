<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCompilationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CompilationJobName
 */
class DescribeCompilationJobRequest extends Request
{
    /**
     * @param array{CompilationJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
