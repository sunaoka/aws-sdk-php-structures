<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataBarsOptions $DataBars
 */
class TableInlineVisualization extends Shape
{
    /**
     * @param array{DataBars?: DataBarsOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
