<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DashboardId
 * @property string $DashboardName
 * @property string $SheetId
 * @property string $SheetName
 * @property string $VisualId
 * @property string $VisualTitle
 * @property string $VisualSubtitle
 * @property string $DashboardUrl
 */
class DashboardVisualResult extends Shape
{
    /**
     * @param array{
     *     DashboardId?: string,
     *     DashboardName?: string,
     *     SheetId?: string,
     *     SheetName?: string,
     *     VisualId?: string,
     *     VisualTitle?: string,
     *     VisualSubtitle?: string,
     *     DashboardUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
