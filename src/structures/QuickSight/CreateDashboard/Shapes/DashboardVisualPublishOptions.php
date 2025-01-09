<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportHiddenFieldsOption $ExportHiddenFieldsOption
 */
class DashboardVisualPublishOptions extends Shape
{
    /**
     * @param array{ExportHiddenFieldsOption?: ExportHiddenFieldsOption} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
