<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property TreeMapConfiguration|null $ChartConfiguration
 * @property list<VisualCustomAction>|null $Actions
 * @property list<ColumnHierarchy>|null $ColumnHierarchies
 * @property string|null $VisualContentAltText
 */
class TreeMapVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: TreeMapConfiguration|null,
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
