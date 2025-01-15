<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property list<string>|null $RowAlternateColors
 * @property 'ENABLED'|'DISABLED'|null $UsePrimaryBackgroundColor
 */
class RowAlternateColorOptions extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     RowAlternateColors?: list<string>|null,
     *     UsePrimaryBackgroundColor?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
