<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultNewSheetConfiguration $DefaultNewSheetConfiguration
 */
class AnalysisDefaults extends Shape
{
    /**
     * @param array{DefaultNewSheetConfiguration: DefaultNewSheetConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
