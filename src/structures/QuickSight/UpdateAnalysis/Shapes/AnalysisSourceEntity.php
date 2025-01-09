<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisSourceTemplate $SourceTemplate
 */
class AnalysisSourceEntity extends Shape
{
    /**
     * @param array{SourceTemplate?: AnalysisSourceTemplate} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
