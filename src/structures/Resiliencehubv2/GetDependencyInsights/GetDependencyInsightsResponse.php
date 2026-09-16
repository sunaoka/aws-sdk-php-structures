<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetDependencyInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $overview
 * @property list<Shapes\DependencyInsight>|null $insights
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'INSUFFICIENT_DATA'|'LLM_GENERATION_FAILED'|'INTERNAL_ERROR'|null $errorCode
 * @property string|null $errorMessage
 */
class GetDependencyInsightsResponse extends Response
{
}
