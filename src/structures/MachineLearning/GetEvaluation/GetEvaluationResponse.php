<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetEvaluation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EvaluationId
 * @property string|null $MLModelId
 * @property string|null $EvaluationDataSourceId
 * @property string|null $InputDataLocationS3
 * @property string|null $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null $Status
 * @property Shapes\PerformanceMetrics|null $PerformanceMetrics
 * @property string|null $LogUri
 * @property string|null $Message
 * @property int|null $ComputeTime
 * @property \Aws\Api\DateTimeResult|null $FinishedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 */
class GetEvaluationResponse extends Response
{
}
