<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterListConfiguration|null $FilterListConfiguration
 * @property CustomFilterListConfiguration|null $CustomFilterListConfiguration
 * @property CustomFilterConfiguration|null $CustomFilterConfiguration
 */
class CategoryFilterConfiguration extends Shape
{
    /**
     * @param array{
     *     FilterListConfiguration?: FilterListConfiguration|null,
     *     CustomFilterListConfiguration?: CustomFilterListConfiguration|null,
     *     CustomFilterConfiguration?: CustomFilterConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
