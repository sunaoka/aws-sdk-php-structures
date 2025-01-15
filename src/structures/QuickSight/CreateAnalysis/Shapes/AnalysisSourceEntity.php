<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisSourceTemplate|null $SourceTemplate
 */
class AnalysisSourceEntity extends Shape
{
    /**
     * @param array{SourceTemplate?: AnalysisSourceTemplate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
