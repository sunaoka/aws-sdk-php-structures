<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartResourceGroupingRecommendationTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $appArn
 * @property string $errorMessage
 * @property string $groupingId
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 */
class StartResourceGroupingRecommendationTaskResponse extends Response
{
}
