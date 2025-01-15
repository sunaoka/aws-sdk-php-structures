<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeResourceGroupingRecommendationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string|null $groupingId
 */
class DescribeResourceGroupingRecommendationTaskRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     groupingId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
