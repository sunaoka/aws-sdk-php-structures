<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExperimentName
 */
class DescribeExperimentRequest extends Request
{
    /**
     * @param array{ExperimentName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
