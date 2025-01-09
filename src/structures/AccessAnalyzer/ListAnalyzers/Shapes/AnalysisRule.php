<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAnalyzers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalysisRuleCriteria> $exclusions
 */
class AnalysisRule extends Shape
{
    /**
     * @param array{exclusions?: list<AnalysisRuleCriteria>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
