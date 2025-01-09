<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartInferenceExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StartInferenceExperimentRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
