<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AIRecommendationJobName
 * @property string $AIRecommendationJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $AIRecommendationJobStatus
 * @property string|null $FailureReason
 * @property Shapes\AIModelSource $ModelSource
 * @property Shapes\AIRecommendationOutputResult $OutputConfig
 * @property Shapes\AIRecommendationInferenceSpecification|null $InferenceSpecification
 * @property string $AIWorkloadConfigIdentifier
 * @property bool|null $OptimizeModel
 * @property Shapes\AIRecommendationPerformanceTarget|null $PerformanceTarget
 * @property list<Shapes\AIRecommendation>|null $Recommendations
 * @property string $RoleArn
 * @property Shapes\AIRecommendationComputeSpec|null $ComputeSpec
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<Shapes\Tag>|null $Tags
 */
class DescribeAIRecommendationJobResponse extends Response
{
}
