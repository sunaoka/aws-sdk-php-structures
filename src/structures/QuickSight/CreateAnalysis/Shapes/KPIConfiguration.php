<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KPIFieldWells|null $FieldWells
 * @property KPISortConfiguration|null $SortConfiguration
 * @property KPIOptions|null $KPIOptions
 * @property VisualInteractionOptions|null $Interactions
 */
class KPIConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: KPIFieldWells|null,
     *     SortConfiguration?: KPISortConfiguration|null,
     *     KPIOptions?: KPIOptions|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
