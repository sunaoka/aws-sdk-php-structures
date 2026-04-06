<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataBarsOptions|null $DataBars
 */
class TableInlineVisualization extends Shape
{
    /**
     * @param array{DataBars?: DataBarsOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
