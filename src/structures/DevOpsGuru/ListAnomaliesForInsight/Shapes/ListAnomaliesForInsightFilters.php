<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceCollection|null $ServiceCollection
 */
class ListAnomaliesForInsightFilters extends Shape
{
    /**
     * @param array{ServiceCollection?: ServiceCollection|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
