<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HyperParameterTuningJobName
 */
class DescribeHyperParameterTuningJobRequest extends Request
{
    /**
     * @param array{HyperParameterTuningJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
