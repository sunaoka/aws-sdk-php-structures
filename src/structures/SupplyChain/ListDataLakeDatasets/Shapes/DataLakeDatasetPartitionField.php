<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataLakeDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property DataLakeDatasetPartitionFieldTransform $transform
 */
class DataLakeDatasetPartitionField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     transform: DataLakeDatasetPartitionFieldTransform
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
