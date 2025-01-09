<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainingJobStepMetadata $TrainingJob
 * @property ProcessingJobStepMetadata $ProcessingJob
 * @property TransformJobStepMetadata $TransformJob
 * @property TuningJobStepMetaData $TuningJob
 * @property ModelStepMetadata $Model
 * @property RegisterModelStepMetadata $RegisterModel
 * @property ConditionStepMetadata $Condition
 * @property CallbackStepMetadata $Callback
 * @property LambdaStepMetadata $Lambda
 * @property EMRStepMetadata $EMR
 * @property QualityCheckStepMetadata $QualityCheck
 * @property ClarifyCheckStepMetadata $ClarifyCheck
 * @property FailStepMetadata $Fail
 * @property AutoMLJobStepMetadata $AutoMLJob
 * @property EndpointStepMetadata $Endpoint
 * @property EndpointConfigStepMetadata $EndpointConfig
 */
class PipelineExecutionStepMetadata extends Shape
{
    /**
     * @param array{
     *     TrainingJob?: TrainingJobStepMetadata,
     *     ProcessingJob?: ProcessingJobStepMetadata,
     *     TransformJob?: TransformJobStepMetadata,
     *     TuningJob?: TuningJobStepMetaData,
     *     Model?: ModelStepMetadata,
     *     RegisterModel?: RegisterModelStepMetadata,
     *     Condition?: ConditionStepMetadata,
     *     Callback?: CallbackStepMetadata,
     *     Lambda?: LambdaStepMetadata,
     *     EMR?: EMRStepMetadata,
     *     QualityCheck?: QualityCheckStepMetadata,
     *     ClarifyCheck?: ClarifyCheckStepMetadata,
     *     Fail?: FailStepMetadata,
     *     AutoMLJob?: AutoMLJobStepMetadata,
     *     Endpoint?: EndpointStepMetadata,
     *     EndpointConfig?: EndpointConfigStepMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
