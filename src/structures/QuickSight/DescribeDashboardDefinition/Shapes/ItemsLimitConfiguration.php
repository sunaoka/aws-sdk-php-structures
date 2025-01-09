<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ItemsLimit
 * @property 'INCLUDE'|'EXCLUDE' $OtherCategories
 */
class ItemsLimitConfiguration extends Shape
{
    /**
     * @param array{
     *     ItemsLimit?: int,
     *     OtherCategories?: 'INCLUDE'|'EXCLUDE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
