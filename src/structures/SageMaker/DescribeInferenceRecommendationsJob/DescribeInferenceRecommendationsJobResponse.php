<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobName
 * @property string|null $JobDescription
 * @property 'Default'|'Advanced' $JobType
 * @property string $JobArn
 * @property string $RoleArn
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $FailureReason
 * @property Shapes\RecommendationJobInputConfig $InputConfig
 * @property Shapes\RecommendationJobStoppingConditions|null $StoppingConditions
 * @property list<Shapes\InferenceRecommendation>|null $InferenceRecommendations
 * @property list<Shapes\EndpointPerformance>|null $EndpointPerformances
 */
class DescribeInferenceRecommendationsJobResponse extends Response
{
}
