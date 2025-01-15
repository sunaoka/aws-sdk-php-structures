<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ItemsLimit
 * @property 'INCLUDE'|'EXCLUDE'|null $OtherCategories
 */
class ItemsLimitConfiguration extends Shape
{
    /**
     * @param array{
     *     ItemsLimit?: int|null,
     *     OtherCategories?: 'INCLUDE'|'EXCLUDE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
