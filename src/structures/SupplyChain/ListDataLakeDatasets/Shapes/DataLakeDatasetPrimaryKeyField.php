<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataLakeDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class DataLakeDatasetPrimaryKeyField extends Shape
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
