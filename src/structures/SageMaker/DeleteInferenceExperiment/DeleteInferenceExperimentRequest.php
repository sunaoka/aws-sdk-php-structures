<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteInferenceExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteInferenceExperimentRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
