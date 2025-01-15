<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CoverageFilterCriterion>|null $FilterCriterion
 */
class CoverageFilterCriteria extends Shape
{
    /**
     * @param array{FilterCriterion?: list<CoverageFilterCriterion>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
