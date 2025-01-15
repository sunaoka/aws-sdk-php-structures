<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TopicIRFilterOption|null $StartRange
 * @property TopicIRFilterOption|null $EndRange
 */
class ContributionAnalysisTimeRanges extends Shape
{
    /**
     * @param array{
     *     StartRange?: TopicIRFilterOption|null,
     *     EndRange?: TopicIRFilterOption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
