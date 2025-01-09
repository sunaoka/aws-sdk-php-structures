<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHyperParameterTuningJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HyperParameterTuningJobName
 */
class DeleteHyperParameterTuningJobRequest extends Request
{
    /**
     * @param array{HyperParameterTuningJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
