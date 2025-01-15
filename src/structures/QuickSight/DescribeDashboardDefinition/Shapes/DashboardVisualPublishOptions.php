<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportHiddenFieldsOption|null $ExportHiddenFieldsOption
 */
class DashboardVisualPublishOptions extends Shape
{
    /**
     * @param array{ExportHiddenFieldsOption?: ExportHiddenFieldsOption|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
