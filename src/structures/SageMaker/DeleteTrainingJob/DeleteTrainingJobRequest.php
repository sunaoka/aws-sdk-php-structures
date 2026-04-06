<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingJobName
 */
class DeleteTrainingJobRequest extends Request
{
    /**
     * @param array{TrainingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
