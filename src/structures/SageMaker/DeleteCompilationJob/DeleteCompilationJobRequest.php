<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteCompilationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CompilationJobName
 */
class DeleteCompilationJobRequest extends Request
{
    /**
     * @param array{CompilationJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
