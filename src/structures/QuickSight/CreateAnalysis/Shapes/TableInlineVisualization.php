<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataBarsOptions|null $DataBars
 * @property SparklinesOptions|null $Sparklines
 */
class TableInlineVisualization extends Shape
{
    /**
     * @param array{
     *     DataBars?: DataBarsOptions|null,
     *     Sparklines?: SparklinesOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
