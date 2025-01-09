<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelVersion
 * @property string $ModelArn
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property string $Description
 * @property 'TRAINING'|'TRAINED'|'TRAINING_FAILED'|'STARTING_HOSTING'|'HOSTED'|'HOSTING_FAILED'|'STOPPING_HOSTING'|'SYSTEM_UPDATING'|'DELETING' $Status
 * @property string $StatusMessage
 * @property ModelPerformance $Performance
 * @property OutputConfig $OutputConfig
 * @property OutputS3Object $EvaluationManifest
 * @property OutputS3Object $EvaluationResult
 * @property \Aws\Api\DateTimeResult $EvaluationEndTimestamp
 * @property string $KmsKeyId
 * @property int $MinInferenceUnits
 * @property int $MaxInferenceUnits
 */
class ModelDescription extends Shape
{
    /**
     * @param array{
     *     ModelVersion?: string,
     *     ModelArn?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Status?: 'TRAINING'|'TRAINED'|'TRAINING_FAILED'|'STARTING_HOSTING'|'HOSTED'|'HOSTING_FAILED'|'STOPPING_HOSTING'|'SYSTEM_UPDATING'|'DELETING',
     *     StatusMessage?: string,
     *     Performance?: ModelPerformance,
     *     OutputConfig?: OutputConfig,
     *     EvaluationManifest?: OutputS3Object,
     *     EvaluationResult?: OutputS3Object,
     *     EvaluationEndTimestamp?: \Aws\Api\DateTimeResult,
     *     KmsKeyId?: string,
     *     MinInferenceUnits?: int,
     *     MaxInferenceUnits?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
