<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldName
 */
class ContributionAnalysisFactor extends Shape
{
    /**
     * @param array{FieldName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
