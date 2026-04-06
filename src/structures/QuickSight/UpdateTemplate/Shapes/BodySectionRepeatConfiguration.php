<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BodySectionRepeatDimensionConfiguration>|null $DimensionConfigurations
 * @property BodySectionRepeatPageBreakConfiguration|null $PageBreakConfiguration
 * @property list<string>|null $NonRepeatingVisuals
 */
class BodySectionRepeatConfiguration extends Shape
{
    /**
     * @param array{
     *     DimensionConfigurations?: list<BodySectionRepeatDimensionConfiguration>|null,
     *     PageBreakConfiguration?: BodySectionRepeatPageBreakConfiguration|null,
     *     NonRepeatingVisuals?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
