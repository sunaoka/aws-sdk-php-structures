<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExperimentName
 */
class DeleteExperimentRequest extends Request
{
    /**
     * @param array{ExperimentName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
