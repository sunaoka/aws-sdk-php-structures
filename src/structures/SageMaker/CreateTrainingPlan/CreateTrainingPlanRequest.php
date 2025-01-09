<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingPlanName
 * @property string $TrainingPlanOfferingId
 * @property list<Shapes\Tag> $Tags
 */
class CreateTrainingPlanRequest extends Request
{
    /**
     * @param array{
     *     TrainingPlanName: string,
     *     TrainingPlanOfferingId: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
