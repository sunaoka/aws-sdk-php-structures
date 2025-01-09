<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CoverageFilterCriterion> $FilterCriterion
 */
class CoverageFilterCriteria extends Shape
{
    /**
     * @param array{FilterCriterion?: list<CoverageFilterCriterion>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
