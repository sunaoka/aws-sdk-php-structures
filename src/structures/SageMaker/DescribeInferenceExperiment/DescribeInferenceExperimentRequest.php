<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeInferenceExperimentRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
