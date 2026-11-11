<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversationalAnalyticsConfiguration|null $Configuration
 * @property ContactAnalysisReferenceState|null $ContactAnalysisReferenceState
 */
class ConversationalAnalytics extends Shape
{
    /**
     * @param array{
     *     Configuration?: ConversationalAnalyticsConfiguration|null,
     *     ContactAnalysisReferenceState?: ContactAnalysisReferenceState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
