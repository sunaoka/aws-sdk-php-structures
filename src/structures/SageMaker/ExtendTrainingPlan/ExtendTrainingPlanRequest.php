<?php

namespace Sunaoka\Aws\Structures\SageMaker\ExtendTrainingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingPlanExtensionOfferingId
 */
class ExtendTrainingPlanRequest extends Request
{
    /**
     * @param array{TrainingPlanExtensionOfferingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
