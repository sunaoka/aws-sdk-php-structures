<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property list<string> $RowAlternateColors
 * @property 'ENABLED'|'DISABLED' $UsePrimaryBackgroundColor
 */
class RowAlternateColorOptions extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED',
     *     RowAlternateColors?: list<string>,
     *     UsePrimaryBackgroundColor?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
