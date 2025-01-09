<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutInsightSelectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ApiCallRateInsight'|'ApiErrorRateInsight' $InsightType
 */
class InsightSelector extends Shape
{
    /**
     * @param array{InsightType?: 'ApiCallRateInsight'|'ApiErrorRateInsight'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
