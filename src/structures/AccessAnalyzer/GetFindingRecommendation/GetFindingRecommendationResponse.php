<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $completedAt
 * @property string $nextToken
 * @property Shapes\RecommendationError $error
 * @property string $resourceArn
 * @property list<Shapes\RecommendedStep> $recommendedSteps
 * @property 'UnusedPermissionRecommendation' $recommendationType
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS' $status
 */
class GetFindingRecommendationResponse extends Response
{
}
