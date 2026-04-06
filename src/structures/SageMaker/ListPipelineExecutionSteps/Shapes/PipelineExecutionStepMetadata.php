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
 * @property QualityCheckStepMetadata|null $QualityCheck
 * @property ClarifyCheckStepMetadata|null $ClarifyCheck
 * @property EMRStepMetadata|null $EMR
 * @property FailStepMetadata|null $Fail
 * @property AutoMLJobStepMetadata|null $AutoMLJob
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
     *     QualityCheck?: QualityCheckStepMetadata|null,
     *     ClarifyCheck?: ClarifyCheckStepMetadata|null,
     *     EMR?: EMRStepMetadata|null,
     *     Fail?: FailStepMetadata|null,
     *     AutoMLJob?: AutoMLJobStepMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
