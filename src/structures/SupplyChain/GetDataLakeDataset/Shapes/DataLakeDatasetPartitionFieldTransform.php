<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataLakeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'YEAR'|'MONTH'|'DAY'|'HOUR'|'IDENTITY' $type
 */
class DataLakeDatasetPartitionFieldTransform extends Shape
{
    /**
     * @param array{type: 'YEAR'|'MONTH'|'DAY'|'HOUR'|'IDENTITY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
