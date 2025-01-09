<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingPlanName
 */
class DescribeTrainingPlanRequest extends Request
{
    /**
     * @param array{TrainingPlanName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
