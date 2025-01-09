<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property string $ModelArn
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
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS' $Status
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
 * @property int $ActiveModelVersion
 * @property string $ActiveModelVersionArn
 * @property \Aws\Api\DateTimeResult $ModelVersionActivatedAt
 * @property int $PreviousActiveModelVersion
 * @property string $PreviousActiveModelVersionArn
 * @property \Aws\Api\DateTimeResult $PreviousModelVersionActivatedAt
 * @property string $PriorModelMetrics
 * @property string $LatestScheduledRetrainingFailedReason
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED' $LatestScheduledRetrainingStatus
 * @property int $LatestScheduledRetrainingModelVersion
 * @property \Aws\Api\DateTimeResult $LatestScheduledRetrainingStartTime
 * @property int $LatestScheduledRetrainingAvailableDataInDays
 * @property \Aws\Api\DateTimeResult $NextScheduledRetrainingStartDate
 * @property \Aws\Api\DateTimeResult $AccumulatedInferenceDataStartTime
 * @property \Aws\Api\DateTimeResult $AccumulatedInferenceDataEndTime
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $RetrainingSchedulerStatus
 * @property Shapes\ModelDiagnosticsOutputConfiguration $ModelDiagnosticsOutputConfiguration
 * @property 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED' $ModelQuality
 */
class DescribeModelResponse extends Response
{
}
