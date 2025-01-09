<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeResourceGroupingRecommendationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $groupingId
 */
class DescribeResourceGroupingRecommendationTaskRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     groupingId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
