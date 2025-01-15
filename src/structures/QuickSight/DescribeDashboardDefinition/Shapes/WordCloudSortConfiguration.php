<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ItemsLimitConfiguration|null $CategoryItemsLimit
 * @property list<FieldSortOptions>|null $CategorySort
 */
class WordCloudSortConfiguration extends Shape
{
    /**
     * @param array{
     *     CategoryItemsLimit?: ItemsLimitConfiguration|null,
     *     CategorySort?: list<FieldSortOptions>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
