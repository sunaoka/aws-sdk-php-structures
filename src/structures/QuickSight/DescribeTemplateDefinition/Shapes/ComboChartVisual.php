<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property ComboChartConfiguration|null $ChartConfiguration
 * @property list<VisualCustomAction>|null $Actions
 * @property list<ColumnHierarchy>|null $ColumnHierarchies
 * @property string|null $VisualContentAltText
 */
class ComboChartVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: ComboChartConfiguration|null,
     *     Actions?: list<VisualCustomAction>|null,
     *     ColumnHierarchies?: list<ColumnHierarchy>|null,
     *     VisualContentAltText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
