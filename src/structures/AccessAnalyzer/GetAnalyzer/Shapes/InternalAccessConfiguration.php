<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InternalAccessAnalysisRule|null $analysisRule
 */
class InternalAccessConfiguration extends Shape
{
    /**
     * @param array{analysisRule?: InternalAccessAnalysisRule|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
