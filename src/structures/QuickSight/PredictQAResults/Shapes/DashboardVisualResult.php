<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DashboardId
 * @property string|null $DashboardName
 * @property string|null $SheetId
 * @property string|null $SheetName
 * @property string|null $VisualId
 * @property string|null $VisualTitle
 * @property string|null $VisualSubtitle
 * @property string|null $DashboardUrl
 */
class DashboardVisualResult extends Shape
{
    /**
     * @param array{
     *     DashboardId?: string|null,
     *     DashboardName?: string|null,
     *     SheetId?: string|null,
     *     SheetName?: string|null,
     *     VisualId?: string|null,
     *     VisualTitle?: string|null,
     *     VisualSubtitle?: string|null,
     *     DashboardUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
