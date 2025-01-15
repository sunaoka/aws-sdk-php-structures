<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultGridLayoutConfiguration|null $Grid
 * @property DefaultFreeFormLayoutConfiguration|null $FreeForm
 */
class DefaultInteractiveLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     Grid?: DefaultGridLayoutConfiguration|null,
     *     FreeForm?: DefaultFreeFormLayoutConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
