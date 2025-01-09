<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $unusedAccessAge
 * @property AnalysisRule $analysisRule
 */
class UnusedAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     unusedAccessAge?: int,
     *     analysisRule?: AnalysisRule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
