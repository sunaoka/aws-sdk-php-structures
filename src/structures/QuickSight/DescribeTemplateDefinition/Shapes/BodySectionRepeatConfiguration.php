<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BodySectionRepeatDimensionConfiguration> $DimensionConfigurations
 * @property BodySectionRepeatPageBreakConfiguration $PageBreakConfiguration
 * @property list<string> $NonRepeatingVisuals
 */
class BodySectionRepeatConfiguration extends Shape
{
    /**
     * @param array{
     *     DimensionConfigurations?: list<BodySectionRepeatDimensionConfiguration>,
     *     PageBreakConfiguration?: BodySectionRepeatPageBreakConfiguration,
     *     NonRepeatingVisuals?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
