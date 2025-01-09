<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectVersionArn
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property int $MinInferenceUnits
 * @property 'TRAINING_IN_PROGRESS'|'TRAINING_COMPLETED'|'TRAINING_FAILED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'COPYING_IN_PROGRESS'|'COPYING_COMPLETED'|'COPYING_FAILED'|'DEPRECATED'|'EXPIRED' $Status
 * @property string $StatusMessage
 * @property int $BillableTrainingTimeInSeconds
 * @property \Aws\Api\DateTimeResult $TrainingEndTimestamp
 * @property OutputConfig $OutputConfig
 * @property TrainingDataResult $TrainingDataResult
 * @property TestingDataResult $TestingDataResult
 * @property EvaluationResult $EvaluationResult
 * @property GroundTruthManifest $ManifestSummary
 * @property string $KmsKeyId
 * @property int $MaxInferenceUnits
 * @property string $SourceProjectVersionArn
 * @property string $VersionDescription
 * @property 'CONTENT_MODERATION'|'CUSTOM_LABELS' $Feature
 * @property string $BaseModelVersion
 * @property CustomizationFeatureConfig $FeatureConfig
 */
class ProjectVersionDescription extends Shape
{
    /**
     * @param array{
     *     ProjectVersionArn?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     MinInferenceUnits?: int,
     *     Status?: 'TRAINING_IN_PROGRESS'|'TRAINING_COMPLETED'|'TRAINING_FAILED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'COPYING_IN_PROGRESS'|'COPYING_COMPLETED'|'COPYING_FAILED'|'DEPRECATED'|'EXPIRED',
     *     StatusMessage?: string,
     *     BillableTrainingTimeInSeconds?: int,
     *     TrainingEndTimestamp?: \Aws\Api\DateTimeResult,
     *     OutputConfig?: OutputConfig,
     *     TrainingDataResult?: TrainingDataResult,
     *     TestingDataResult?: TestingDataResult,
     *     EvaluationResult?: EvaluationResult,
     *     ManifestSummary?: GroundTruthManifest,
     *     KmsKeyId?: string,
     *     MaxInferenceUnits?: int,
     *     SourceProjectVersionArn?: string,
     *     VersionDescription?: string,
     *     Feature?: 'CONTENT_MODERATION'|'CUSTOM_LABELS',
     *     BaseModelVersion?: string,
     *     FeatureConfig?: CustomizationFeatureConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
