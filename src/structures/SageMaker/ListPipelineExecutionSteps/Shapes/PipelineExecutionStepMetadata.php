<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainingJobStepMetadata|null $TrainingJob
 * @property ProcessingJobStepMetadata|null $ProcessingJob
 * @property TransformJobStepMetadata|null $TransformJob
 * @property TuningJobStepMetaData|null $TuningJob
 * @property ModelStepMetadata|null $Model
 * @property RegisterModelStepMetadata|null $RegisterModel
 * @property ConditionStepMetadata|null $Condition
 * @property CallbackStepMetadata|null $Callback
 * @property LambdaStepMetadata|null $Lambda
 * @property EMRStepMetadata|null $EMR
 * @property QualityCheckStepMetadata|null $QualityCheck
 * @property ClarifyCheckStepMetadata|null $ClarifyCheck
 * @property FailStepMetadata|null $Fail
 * @property AutoMLJobStepMetadata|null $AutoMLJob
 * @property EndpointStepMetadata|null $Endpoint
 * @property EndpointConfigStepMetadata|null $EndpointConfig
 * @property BedrockCustomModelMetadata|null $BedrockCustomModel
 * @property BedrockCustomModelDeploymentMetadata|null $BedrockCustomModelDeployment
 * @property BedrockProvisionedModelThroughputMetadata|null $BedrockProvisionedModelThroughput
 * @property BedrockModelImportMetadata|null $BedrockModelImport
 * @property InferenceComponentMetadata|null $InferenceComponent
 * @property LineageMetadata|null $Lineage
 */
class PipelineExecutionStepMetadata extends Shape
{
    /**
     * @param array{
     *     TrainingJob?: TrainingJobStepMetadata|null,
     *     ProcessingJob?: ProcessingJobStepMetadata|null,
     *     TransformJob?: TransformJobStepMetadata|null,
     *     TuningJob?: TuningJobStepMetaData|null,
     *     Model?: ModelStepMetadata|null,
     *     RegisterModel?: RegisterModelStepMetadata|null,
     *     Condition?: ConditionStepMetadata|null,
     *     Callback?: CallbackStepMetadata|null,
     *     Lambda?: LambdaStepMetadata|null,
     *     EMR?: EMRStepMetadata|null,
     *     QualityCheck?: QualityCheckStepMetadata|null,
     *     ClarifyCheck?: ClarifyCheckStepMetadata|null,
     *     Fail?: FailStepMetadata|null,
     *     AutoMLJob?: AutoMLJobStepMetadata|null,
     *     Endpoint?: EndpointStepMetadata|null,
     *     EndpointConfig?: EndpointConfigStepMetadata|null,
     *     BedrockCustomModel?: BedrockCustomModelMetadata|null,
     *     BedrockCustomModelDeployment?: BedrockCustomModelDeploymentMetadata|null,
     *     BedrockProvisionedModelThroughput?: BedrockProvisionedModelThroughputMetadata|null,
     *     BedrockModelImport?: BedrockModelImportMetadata|null,
     *     InferenceComponent?: InferenceComponentMetadata|null,
     *     Lineage?: LineageMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
