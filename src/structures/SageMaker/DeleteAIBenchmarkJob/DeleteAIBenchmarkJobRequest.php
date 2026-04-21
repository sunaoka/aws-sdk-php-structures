<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAIBenchmarkJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIBenchmarkJobName
 */
class DeleteAIBenchmarkJobRequest extends Request
{
    /**
     * @param array{AIBenchmarkJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
