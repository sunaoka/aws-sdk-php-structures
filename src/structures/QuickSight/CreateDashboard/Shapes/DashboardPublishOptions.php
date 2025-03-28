<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AdHocFilteringOption|null $AdHocFilteringOption
 * @property ExportToCSVOption|null $ExportToCSVOption
 * @property SheetControlsOption|null $SheetControlsOption
 * @property DashboardVisualPublishOptions|null $VisualPublishOptions
 * @property SheetLayoutElementMaximizationOption|null $SheetLayoutElementMaximizationOption
 * @property VisualMenuOption|null $VisualMenuOption
 * @property VisualAxisSortOption|null $VisualAxisSortOption
 * @property ExportWithHiddenFieldsOption|null $ExportWithHiddenFieldsOption
 * @property DataPointDrillUpDownOption|null $DataPointDrillUpDownOption
 * @property DataPointMenuLabelOption|null $DataPointMenuLabelOption
 * @property DataPointTooltipOption|null $DataPointTooltipOption
 * @property DataQAEnabledOption|null $DataQAEnabledOption
 */
class DashboardPublishOptions extends Shape
{
    /**
     * @param array{
     *     AdHocFilteringOption?: AdHocFilteringOption|null,
     *     ExportToCSVOption?: ExportToCSVOption|null,
     *     SheetControlsOption?: SheetControlsOption|null,
     *     VisualPublishOptions?: DashboardVisualPublishOptions|null,
     *     SheetLayoutElementMaximizationOption?: SheetLayoutElementMaximizationOption|null,
     *     VisualMenuOption?: VisualMenuOption|null,
     *     VisualAxisSortOption?: VisualAxisSortOption|null,
     *     ExportWithHiddenFieldsOption?: ExportWithHiddenFieldsOption|null,
     *     DataPointDrillUpDownOption?: DataPointDrillUpDownOption|null,
     *     DataPointMenuLabelOption?: DataPointMenuLabelOption|null,
     *     DataPointTooltipOption?: DataPointTooltipOption|null,
     *     DataQAEnabledOption?: DataQAEnabledOption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
