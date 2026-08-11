<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateMetricContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property string|null $MetricName
 * @property string|null $MetricId
 * @property list<MetricFilter>|null $MetricFilters
 */
class CalculationComponent extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     MetricName?: string|null,
     *     MetricId?: string|null,
     *     MetricFilters?: list<MetricFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
