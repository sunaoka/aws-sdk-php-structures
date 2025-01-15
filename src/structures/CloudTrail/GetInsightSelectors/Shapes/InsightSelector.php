<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetInsightSelectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ApiCallRateInsight'|'ApiErrorRateInsight'|null $InsightType
 */
class InsightSelector extends Shape
{
    /**
     * @param array{InsightType?: 'ApiCallRateInsight'|'ApiErrorRateInsight'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
