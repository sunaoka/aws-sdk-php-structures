<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KPIFieldWells $FieldWells
 * @property KPISortConfiguration $SortConfiguration
 * @property KPIOptions $KPIOptions
 * @property VisualInteractionOptions $Interactions
 */
class KPIConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: KPIFieldWells,
     *     SortConfiguration?: KPISortConfiguration,
     *     KPIOptions?: KPIOptions,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
