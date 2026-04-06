<?php

namespace Sunaoka\Aws\Structures\Notifications\GetManagedNotificationChildEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SummarizationDimensionDetail>|null $summarizationDimensions
 */
class AggregationDetail extends Shape
{
    /**
     * @param array{summarizationDimensions?: list<SummarizationDimensionDetail>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
