<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SchemaAttribute>|null $Attributes
 */
class Schema extends Shape
{
    /**
     * @param array{Attributes?: list<SchemaAttribute>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
