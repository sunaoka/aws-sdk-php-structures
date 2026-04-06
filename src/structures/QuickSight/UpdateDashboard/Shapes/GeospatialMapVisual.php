<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property VisualTitleLabelOptions|null $Title
 * @property VisualSubtitleLabelOptions|null $Subtitle
 * @property GeospatialMapConfiguration|null $ChartConfiguration
 * @property list<ColumnHierarchy>|null $ColumnHierarchies
 * @property list<VisualCustomAction>|null $Actions
 * @property string|null $VisualContentAltText
 * @property list<GeocodePreference>|null $GeocodingPreferences
 */
class GeospatialMapVisual extends Shape
{
    /**
     * @param array{
     *     VisualId: string,
     *     Title?: VisualTitleLabelOptions|null,
     *     Subtitle?: VisualSubtitleLabelOptions|null,
     *     ChartConfiguration?: GeospatialMapConfiguration|null,
     *     ColumnHierarchies?: list<ColumnHierarchy>|null,
     *     Actions?: list<VisualCustomAction>|null,
     *     VisualContentAltText?: string|null,
     *     GeocodingPreferences?: list<GeocodePreference>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
