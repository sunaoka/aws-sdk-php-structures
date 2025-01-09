<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdHocFilteringOption $AdHocFilteringOption
 * @property ExportToCSVOption $ExportToCSVOption
 * @property SheetControlsOption $SheetControlsOption
 * @property DashboardVisualPublishOptions $VisualPublishOptions
 * @property SheetLayoutElementMaximizationOption $SheetLayoutElementMaximizationOption
 * @property VisualMenuOption $VisualMenuOption
 * @property VisualAxisSortOption $VisualAxisSortOption
 * @property ExportWithHiddenFieldsOption $ExportWithHiddenFieldsOption
 * @property DataPointDrillUpDownOption $DataPointDrillUpDownOption
 * @property DataPointMenuLabelOption $DataPointMenuLabelOption
 * @property DataPointTooltipOption $DataPointTooltipOption
 */
class DashboardPublishOptions extends Shape
{
    /**
     * @param array{
     *     AdHocFilteringOption?: AdHocFilteringOption,
     *     ExportToCSVOption?: ExportToCSVOption,
     *     SheetControlsOption?: SheetControlsOption,
     *     VisualPublishOptions?: DashboardVisualPublishOptions,
     *     SheetLayoutElementMaximizationOption?: SheetLayoutElementMaximizationOption,
     *     VisualMenuOption?: VisualMenuOption,
     *     VisualAxisSortOption?: VisualAxisSortOption,
     *     ExportWithHiddenFieldsOption?: ExportWithHiddenFieldsOption,
     *     DataPointDrillUpDownOption?: DataPointDrillUpDownOption,
     *     DataPointMenuLabelOption?: DataPointMenuLabelOption,
     *     DataPointTooltipOption?: DataPointTooltipOption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
