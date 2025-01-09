<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceCollection $ServiceCollection
 */
class ListAnomaliesForInsightFilters extends Shape
{
    /**
     * @param array{ServiceCollection?: ServiceCollection} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
