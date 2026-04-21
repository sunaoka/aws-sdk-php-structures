<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIBenchmarkJobName
 */
class DescribeAIBenchmarkJobRequest extends Request
{
    /**
     * @param array{AIBenchmarkJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
