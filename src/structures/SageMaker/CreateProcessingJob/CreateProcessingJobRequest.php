<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProcessingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ProcessingInput> $ProcessingInputs
 * @property Shapes\ProcessingOutputConfig $ProcessingOutputConfig
 * @property string $ProcessingJobName
 * @property Shapes\ProcessingResources $ProcessingResources
 * @property Shapes\ProcessingStoppingCondition $StoppingCondition
 * @property Shapes\AppSpecification $AppSpecification
 * @property array<string, string> $Environment
 * @property Shapes\NetworkConfig $NetworkConfig
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\ExperimentConfig $ExperimentConfig
 */
class CreateProcessingJobRequest extends Request
{
    /**
     * @param array{
     *     ProcessingInputs?: list<Shapes\ProcessingInput>,
     *     ProcessingOutputConfig?: Shapes\ProcessingOutputConfig,
     *     ProcessingJobName: string,
     *     ProcessingResources: Shapes\ProcessingResources,
     *     StoppingCondition?: Shapes\ProcessingStoppingCondition,
     *     AppSpecification: Shapes\AppSpecification,
     *     Environment?: array<string, string>,
     *     NetworkConfig?: Shapes\NetworkConfig,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     ExperimentConfig?: Shapes\ExperimentConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
