<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopCompilationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CompilationJobName
 */
class StopCompilationJobRequest extends Request
{
    /**
     * @param array{CompilationJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
