<?php

namespace Sunaoka\Aws\Structures\Iot\CreateFleetMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Statistics'|'Percentiles'|'Cardinality' $name
 * @property list<string>|null $values
 */
class AggregationType extends Shape
{
    /**
     * @param array{
     *     name: 'Statistics'|'Percentiles'|'Cardinality',
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
