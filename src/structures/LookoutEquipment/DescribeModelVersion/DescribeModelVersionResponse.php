<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property int<1, max>|null $ModelVersion
 * @property string|null $ModelVersionArn
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED'|null $Status
 * @property 'TRAINING'|'RETRAINING'|'IMPORT'|null $SourceType
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
 * @property int<0, max>|null $ImportedDataSizeInBytes
 */
class DescribeModelVersionResponse extends Response
{
}
