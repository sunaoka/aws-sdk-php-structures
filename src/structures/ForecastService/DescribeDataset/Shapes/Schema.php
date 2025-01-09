<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SchemaAttribute> $Attributes
 */
class Schema extends Shape
{
    /**
     * @param array{Attributes?: list<SchemaAttribute>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
