<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommender;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RecommenderName
 * @property 'recommended-for-you'|'similar-items'|'frequently-paired-items'|'popular-items'|'trending-now' $RecommenderRecipeName
 * @property Shapes\RecommenderConfig|null $RecommenderConfig
 * @property string|null $Description
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'FAILED'|'STOPPING'|'INACTIVE'|'STARTING'|'DELETING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $FailureReason
 * @property Shapes\RecommenderUpdate|null $LatestRecommenderUpdate
 * @property list<Shapes\TrainingMetrics>|null $TrainingMetrics
 * @property array<string, string>|null $Tags
 */
class GetRecommenderResponse extends Response
{
}
