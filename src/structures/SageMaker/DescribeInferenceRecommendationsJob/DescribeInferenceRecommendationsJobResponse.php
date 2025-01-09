<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobName
 * @property string $JobDescription
 * @property 'Default'|'Advanced' $JobType
 * @property string $JobArn
 * @property string $RoleArn
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 * @property Shapes\RecommendationJobInputConfig $InputConfig
 * @property Shapes\RecommendationJobStoppingConditions $StoppingConditions
 * @property list<Shapes\InferenceRecommendation> $InferenceRecommendations
 * @property list<Shapes\EndpointPerformance> $EndpointPerformances
 */
class DescribeInferenceRecommendationsJobResponse extends Response
{
}
