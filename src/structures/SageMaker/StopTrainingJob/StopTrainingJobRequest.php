<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingJobName
 */
class StopTrainingJobRequest extends Request
{
    /**
     * @param array{TrainingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
