<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $unusedAccessAge
 * @property AnalysisRule|null $analysisRule
 */
class UnusedAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     unusedAccessAge?: int|null,
     *     analysisRule?: AnalysisRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
