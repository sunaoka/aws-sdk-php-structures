<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingJobName
 */
class DescribeTrainingJobRequest extends Request
{
    /**
     * @param array{TrainingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
