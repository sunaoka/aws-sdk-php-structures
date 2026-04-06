<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MachineLearningProductLastModifiedDateFilterDateRange|null $DateRange
 */
class MachineLearningProductLastModifiedDateFilter extends Shape
{
    /**
     * @param array{DateRange?: MachineLearningProductLastModifiedDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
