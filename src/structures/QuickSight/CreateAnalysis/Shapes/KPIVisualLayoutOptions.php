<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KPIVisualStandardLayout|null $StandardLayout
 */
class KPIVisualLayoutOptions extends Shape
{
    /**
     * @param array{StandardLayout?: KPIVisualStandardLayout|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
