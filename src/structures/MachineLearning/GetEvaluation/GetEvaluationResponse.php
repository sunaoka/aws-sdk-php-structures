<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetEvaluation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EvaluationId
 * @property string $MLModelId
 * @property string $EvaluationDataSourceId
 * @property string $InputDataLocationS3
 * @property string $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property string $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED' $Status
 * @property Shapes\PerformanceMetrics $PerformanceMetrics
 * @property string $LogUri
 * @property string $Message
 * @property int $ComputeTime
 * @property \Aws\Api\DateTimeResult $FinishedAt
 * @property \Aws\Api\DateTimeResult $StartedAt
 */
class GetEvaluationResponse extends Response
{
}
