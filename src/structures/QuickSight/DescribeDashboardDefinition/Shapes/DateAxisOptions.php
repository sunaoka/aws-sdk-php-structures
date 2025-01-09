<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $MissingDateVisibility
 */
class DateAxisOptions extends Shape
{
    /**
     * @param array{MissingDateVisibility?: 'HIDDEN'|'VISIBLE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
