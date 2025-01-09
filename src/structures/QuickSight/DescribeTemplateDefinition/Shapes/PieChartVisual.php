<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions $Title
 * @property VisualSubtitleLabelOptions $Subtitle
 * @property PieChartConfiguration $ChartConfiguration
 * @property list<VisualCustomAction> $Actions
 * @property list<ColumnHierarchy> $ColumnHierarchies
 * @property string $VisualContentAltText
 */
class PieChartVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions,
     *     Subtitle?: VisualSubtitleLabelOptions,
     *     ChartConfiguration?: PieChartConfiguration,
     *     Actions?: list<VisualCustomAction>,
     *     ColumnHierarchies?: list<ColumnHierarchy>,
     *     VisualContentAltText?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
