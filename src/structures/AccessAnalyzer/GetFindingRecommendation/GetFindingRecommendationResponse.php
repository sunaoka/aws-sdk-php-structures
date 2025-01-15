<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property string|null $nextToken
 * @property Shapes\RecommendationError|null $error
 * @property string $resourceArn
 * @property list<Shapes\RecommendedStep>|null $recommendedSteps
 * @property 'UnusedPermissionRecommendation' $recommendationType
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS' $status
 */
class GetFindingRecommendationResponse extends Response
{
}
