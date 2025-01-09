<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SectionLayoutConfiguration $Layout
 */
class BodySectionContent extends Shape
{
    /**
     * @param array{Layout?: SectionLayoutConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
