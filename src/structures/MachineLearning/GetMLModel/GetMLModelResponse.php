<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetMLModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $MLModelId
 * @property string|null $TrainingDataSourceId
 * @property string|null $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null $Status
 * @property int|null $SizeInBytes
 * @property Shapes\RealtimeEndpointInfo|null $EndpointInfo
 * @property array<string, string>|null $TrainingParameters
 * @property string|null $InputDataLocationS3
 * @property 'REGRESSION'|'BINARY'|'MULTICLASS'|null $MLModelType
 * @property float|null $ScoreThreshold
 * @property \Aws\Api\DateTimeResult|null $ScoreThresholdLastUpdatedAt
 * @property string|null $LogUri
 * @property string|null $Message
 * @property int|null $ComputeTime
 * @property \Aws\Api\DateTimeResult|null $FinishedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property string|null $Recipe
 * @property string|null $Schema
 */
class GetMLModelResponse extends Response
{
}
