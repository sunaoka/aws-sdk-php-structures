<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GridLayoutConfiguration $GridLayout
 * @property FreeFormLayoutConfiguration $FreeFormLayout
 * @property SectionBasedLayoutConfiguration $SectionBasedLayout
 */
class LayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     GridLayout?: GridLayoutConfiguration,
     *     FreeFormLayout?: FreeFormLayoutConfiguration,
     *     SectionBasedLayout?: SectionBasedLayoutConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
