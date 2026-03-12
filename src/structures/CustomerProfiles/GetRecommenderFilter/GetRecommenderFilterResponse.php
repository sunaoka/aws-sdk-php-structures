<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommenderFilter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RecommenderFilterName
 * @property string $RecommenderFilterExpression
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'ACTIVE'|'PENDING'|'IN_PROGRESS'|'FAILED'|'DELETING' $Status
 * @property string|null $Description
 * @property string|null $FailureReason
 * @property array<string, string> $Tags
 */
class GetRecommenderFilterResponse extends Response
{
}
