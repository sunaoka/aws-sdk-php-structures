<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property int<1, max> $ModelVersion
 * @property string $ModelVersionArn
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED' $Status
 * @property 'TRAINING'|'RETRAINING'|'IMPORT' $SourceType
 * @property string $DatasetName
 * @property string $DatasetArn
 * @property string $Schema
 * @property Shapes\LabelsInputConfiguration $LabelsInputConfiguration
 * @property \Aws\Api\DateTimeResult $TrainingDataStartTime
 * @property \Aws\Api\DateTimeResult $TrainingDataEndTime
 * @property \Aws\Api\DateTimeResult $EvaluationDataStartTime
 * @property \Aws\Api\DateTimeResult $EvaluationDataEndTime
 * @property string $RoleArn
 * @property Shapes\DataPreProcessingConfiguration $DataPreProcessingConfiguration
 * @property \Aws\Api\DateTimeResult $TrainingExecutionStartTime
 * @property \Aws\Api\DateTimeResult $TrainingExecutionEndTime
 * @property string $FailedReason
 * @property string $ModelMetrics
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $ServerSideKmsKeyId
 * @property string $OffCondition
 * @property string $SourceModelVersionArn
 * @property \Aws\Api\DateTimeResult $ImportJobStartTime
 * @property \Aws\Api\DateTimeResult $ImportJobEndTime
 * @property int<0, max> $ImportedDataSizeInBytes
 * @property string $PriorModelMetrics
 * @property int $RetrainingAvailableDataInDays
 * @property 'MODEL_PROMOTED'|'MODEL_NOT_PROMOTED'|'RETRAINING_INTERNAL_ERROR'|'RETRAINING_CUSTOMER_ERROR'|'RETRAINING_CANCELLED' $AutoPromotionResult
 * @property string $AutoPromotionResultReason
 * @property Shapes\ModelDiagnosticsOutputConfiguration $ModelDiagnosticsOutputConfiguration
 * @property Shapes\S3Object $ModelDiagnosticsResultsObject
 * @property 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED' $ModelQuality
 */
class DescribeModelVersionResponse extends Response
{
}
