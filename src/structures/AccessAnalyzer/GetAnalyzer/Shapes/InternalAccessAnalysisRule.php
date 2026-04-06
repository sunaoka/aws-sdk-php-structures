<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InternalAccessAnalysisRuleCriteria>|null $inclusions
 */
class InternalAccessAnalysisRule extends Shape
{
    /**
     * @param array{inclusions?: list<InternalAccessAnalysisRuleCriteria>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
