<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProcessingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ProcessingInput>|null $ProcessingInputs
 * @property Shapes\ProcessingOutputConfig|null $ProcessingOutputConfig
 * @property string $ProcessingJobName
 * @property Shapes\ProcessingResources $ProcessingResources
 * @property Shapes\ProcessingStoppingCondition|null $StoppingCondition
 * @property Shapes\AppSpecification $AppSpecification
 * @property array<string, string>|null $Environment
 * @property Shapes\NetworkConfig|null $NetworkConfig
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ExperimentConfig|null $ExperimentConfig
 */
class CreateProcessingJobRequest extends Request
{
    /**
     * @param array{
     *     ProcessingInputs?: list<Shapes\ProcessingInput>|null,
     *     ProcessingOutputConfig?: Shapes\ProcessingOutputConfig|null,
     *     ProcessingJobName: string,
     *     ProcessingResources: Shapes\ProcessingResources,
     *     StoppingCondition?: Shapes\ProcessingStoppingCondition|null,
     *     AppSpecification: Shapes\AppSpecification,
     *     Environment?: array<string, string>|null,
     *     NetworkConfig?: Shapes\NetworkConfig|null,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ExperimentConfig?: Shapes\ExperimentConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
