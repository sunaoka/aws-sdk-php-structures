<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeResourceGroupingRecommendationTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $errorMessage
 * @property string $groupingId
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 */
class DescribeResourceGroupingRecommendationTaskResponse extends Response
{
}
