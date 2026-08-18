<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EntityId
 * @property string|null $ChangeSetId
 */
class AssessmentTargetSummary extends Shape
{
    /**
     * @param array{
     *     EntityId?: string|null,
     *     ChangeSetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
