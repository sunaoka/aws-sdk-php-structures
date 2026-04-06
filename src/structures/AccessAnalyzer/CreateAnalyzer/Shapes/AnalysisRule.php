<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalysisRuleCriteria>|null $exclusions
 */
class AnalysisRule extends Shape
{
    /**
     * @param array{exclusions?: list<AnalysisRuleCriteria>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
