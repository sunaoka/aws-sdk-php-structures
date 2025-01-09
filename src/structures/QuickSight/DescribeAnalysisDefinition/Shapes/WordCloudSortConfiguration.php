<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ItemsLimitConfiguration $CategoryItemsLimit
 * @property list<FieldSortOptions> $CategorySort
 */
class WordCloudSortConfiguration extends Shape
{
    /**
     * @param array{
     *     CategoryItemsLimit?: ItemsLimitConfiguration,
     *     CategorySort?: list<FieldSortOptions>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
