<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopAIBenchmarkJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIBenchmarkJobName
 */
class StopAIBenchmarkJobRequest extends Request
{
    /**
     * @param array{AIBenchmarkJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
