<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FreeFormSectionLayoutConfiguration $FreeFormLayout
 */
class SectionLayoutConfiguration extends Shape
{
    /**
     * @param array{FreeFormLayout: FreeFormSectionLayoutConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
