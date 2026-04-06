<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property string|null $DatasetName
 * @property string|null $DatasetArn
 * @property string|null $Schema
 * @property Shapes\LabelsInputConfiguration|null $LabelsInputConfiguration
 * @property \Aws\Api\DateTimeResult|null $TrainingDataStartTime
 * @property \Aws\Api\DateTimeResult|null $TrainingDataEndTime
 * @property \Aws\Api\DateTimeResult|null $EvaluationDataStartTime
 * @property \Aws\Api\DateTimeResult|null $EvaluationDataEndTime
 * @property string|null $RoleArn
 * @property Shapes\DataPreProcessingConfiguration|null $DataPreProcessingConfiguration
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null $Status
 * @property \Aws\Api\DateTimeResult|null $TrainingExecutionStartTime
 * @property \Aws\Api\DateTimeResult|null $TrainingExecutionEndTime
 * @property string|null $FailedReason
 * @property string|null $ModelMetrics
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $ServerSideKmsKeyId
 * @property string|null $OffCondition
 * @property string|null $SourceModelVersionArn
 * @property \Aws\Api\DateTimeResult|null $ImportJobStartTime
 * @property \Aws\Api\DateTimeResult|null $ImportJobEndTime
 * @property int<1, max>|null $ActiveModelVersion
 * @property string|null $ActiveModelVersionArn
 * @property \Aws\Api\DateTimeResult|null $ModelVersionActivatedAt
 * @property int<1, max>|null $PreviousActiveModelVersion
 * @property string|null $PreviousActiveModelVersionArn
 * @property \Aws\Api\DateTimeResult|null $PreviousModelVersionActivatedAt
 * @property string|null $PriorModelMetrics
 * @property string|null $LatestScheduledRetrainingFailedReason
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED'|null $LatestScheduledRetrainingStatus
 * @property int<1, max>|null $LatestScheduledRetrainingModelVersion
 * @property \Aws\Api\DateTimeResult|null $LatestScheduledRetrainingStartTime
 * @property int|null $LatestScheduledRetrainingAvailableDataInDays
 * @property \Aws\Api\DateTimeResult|null $NextScheduledRetrainingStartDate
 * @property \Aws\Api\DateTimeResult|null $AccumulatedInferenceDataStartTime
 * @property \Aws\Api\DateTimeResult|null $AccumulatedInferenceDataEndTime
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $RetrainingSchedulerStatus
 * @property Shapes\ModelDiagnosticsOutputConfiguration|null $ModelDiagnosticsOutputConfiguration
 * @property 'QUALITY_THRESHOLD_MET'|'CANNOT_DETERMINE_QUALITY'|'POOR_QUALITY_DETECTED'|null $ModelQuality
 */
class DescribeModelResponse extends Response
{
}
