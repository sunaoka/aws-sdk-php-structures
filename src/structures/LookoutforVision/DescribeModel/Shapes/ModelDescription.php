<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelVersion
 * @property string|null $ModelArn
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property string|null $Description
 * @property 'TRAINING'|'TRAINED'|'TRAINING_FAILED'|'STARTING_HOSTING'|'HOSTED'|'HOSTING_FAILED'|'STOPPING_HOSTING'|'SYSTEM_UPDATING'|'DELETING'|null $Status
 * @property string|null $StatusMessage
 * @property ModelPerformance|null $Performance
 * @property OutputConfig|null $OutputConfig
 * @property OutputS3Object|null $EvaluationManifest
 * @property OutputS3Object|null $EvaluationResult
 * @property \Aws\Api\DateTimeResult|null $EvaluationEndTimestamp
 * @property string|null $KmsKeyId
 * @property int<1, max>|null $MinInferenceUnits
 * @property int<1, max>|null $MaxInferenceUnits
 */
class ModelDescription extends Shape
{
    /**
     * @param array{
     *     ModelVersion?: string|null,
     *     ModelArn?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Status?: 'TRAINING'|'TRAINED'|'TRAINING_FAILED'|'STARTING_HOSTING'|'HOSTED'|'HOSTING_FAILED'|'STOPPING_HOSTING'|'SYSTEM_UPDATING'|'DELETING'|null,
     *     StatusMessage?: string|null,
     *     Performance?: ModelPerformance|null,
     *     OutputConfig?: OutputConfig|null,
     *     EvaluationManifest?: OutputS3Object|null,
     *     EvaluationResult?: OutputS3Object|null,
     *     EvaluationEndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     KmsKeyId?: string|null,
     *     MinInferenceUnits?: int<1, max>|null,
     *     MaxInferenceUnits?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
