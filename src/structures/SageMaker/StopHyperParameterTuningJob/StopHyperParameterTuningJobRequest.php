<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopHyperParameterTuningJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HyperParameterTuningJobName
 */
class StopHyperParameterTuningJobRequest extends Request
{
    /**
     * @param array{HyperParameterTuningJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
