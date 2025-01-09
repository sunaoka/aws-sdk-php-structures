<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetMLModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MLModelId
 * @property string $TrainingDataSourceId
 * @property string $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property string $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED' $Status
 * @property int $SizeInBytes
 * @property Shapes\RealtimeEndpointInfo $EndpointInfo
 * @property array<string, string> $TrainingParameters
 * @property string $InputDataLocationS3
 * @property 'REGRESSION'|'BINARY'|'MULTICLASS' $MLModelType
 * @property float $ScoreThreshold
 * @property \Aws\Api\DateTimeResult $ScoreThresholdLastUpdatedAt
 * @property string $LogUri
 * @property string $Message
 * @property int $ComputeTime
 * @property \Aws\Api\DateTimeResult $FinishedAt
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property string $Recipe
 * @property string $Schema
 */
class GetMLModelResponse extends Response
{
}
