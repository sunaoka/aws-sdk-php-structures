<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VisualCustomizationFieldsConfiguration|null $FieldsConfiguration
 */
class DashboardCustomizationVisualOptions extends Shape
{
    /**
     * @param array{FieldsConfiguration?: VisualCustomizationFieldsConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
