<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TopicIRFilterOption $StartRange
 * @property TopicIRFilterOption $EndRange
 */
class ContributionAnalysisTimeRanges extends Shape
{
    /**
     * @param array{
     *     StartRange?: TopicIRFilterOption,
     *     EndRange?: TopicIRFilterOption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
