<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProjectVersionArn
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property int<1, max>|null $MinInferenceUnits
 * @property 'TRAINING_IN_PROGRESS'|'TRAINING_COMPLETED'|'TRAINING_FAILED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'COPYING_IN_PROGRESS'|'COPYING_COMPLETED'|'COPYING_FAILED'|'DEPRECATED'|'EXPIRED'|null $Status
 * @property string|null $StatusMessage
 * @property int<0, max>|null $BillableTrainingTimeInSeconds
 * @property \Aws\Api\DateTimeResult|null $TrainingEndTimestamp
 * @property OutputConfig|null $OutputConfig
 * @property TrainingDataResult|null $TrainingDataResult
 * @property TestingDataResult|null $TestingDataResult
 * @property EvaluationResult|null $EvaluationResult
 * @property GroundTruthManifest|null $ManifestSummary
 * @property string|null $KmsKeyId
 * @property int<1, max>|null $MaxInferenceUnits
 * @property string|null $SourceProjectVersionArn
 * @property string|null $VersionDescription
 * @property 'CONTENT_MODERATION'|'CUSTOM_LABELS'|null $Feature
 * @property string|null $BaseModelVersion
 * @property CustomizationFeatureConfig|null $FeatureConfig
 */
class ProjectVersionDescription extends Shape
{
    /**
     * @param array{
     *     ProjectVersionArn?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     MinInferenceUnits?: int<1, max>|null,
     *     Status?: 'TRAINING_IN_PROGRESS'|'TRAINING_COMPLETED'|'TRAINING_FAILED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'COPYING_IN_PROGRESS'|'COPYING_COMPLETED'|'COPYING_FAILED'|'DEPRECATED'|'EXPIRED'|null,
     *     StatusMessage?: string|null,
     *     BillableTrainingTimeInSeconds?: int<0, max>|null,
     *     TrainingEndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     OutputConfig?: OutputConfig|null,
     *     TrainingDataResult?: TrainingDataResult|null,
     *     TestingDataResult?: TestingDataResult|null,
     *     EvaluationResult?: EvaluationResult|null,
     *     ManifestSummary?: GroundTruthManifest|null,
     *     KmsKeyId?: string|null,
     *     MaxInferenceUnits?: int<1, max>|null,
     *     SourceProjectVersionArn?: string|null,
     *     VersionDescription?: string|null,
     *     Feature?: 'CONTENT_MODERATION'|'CUSTOM_LABELS'|null,
     *     BaseModelVersion?: string|null,
     *     FeatureConfig?: CustomizationFeatureConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
